import scrapy

from moonscraper.items import MoonItem


class MoonspiderSpider(scrapy.Spider):
    name = "moonspider"
    allowed_domains = ["moonsister.pl"]
    start_urls = ["https://moonsister.pl/",
                  ]

    def parse(self, response):
        mainCategories = response.xpath("//div[@class='drawer__menu']/child::*[4]/child::*[2]/child::*[2]/*")
        len(mainCategories)  # 6 main categories

        # go through main categories
        for mainCategory in mainCategories:
            mainCategoryName = mainCategory.xpath("child::*[2]/child::*[1]/a[@class='sliderow__title']/text()").get()
            subCategories = mainCategory.xpath("child::*[2]/child::*[2]/*")
            print(f"{mainCategoryName}: {len(subCategories)}")

            # go through sub categories
            for subCategory in subCategories:
                subCategoryName = subCategory.xpath("child::*[1]/a[@class='sliderow__title']/text()").get()
                print(f"\t {subCategoryName}")
                subCategoryUrl = "https://moonsister.pl" + \
                                 subCategory.xpath("child::*[1]/a[@class='sliderow__title']").attrib['href']
                yield response.follow(subCategoryUrl, callback=self.parse_item_page,
                                      cb_kwargs={'mainCategoryName': mainCategoryName,
                                                 'subCategoryName': subCategoryName})

    def parse_item_page(self, response, mainCategoryName, subCategoryName):
        items = response.css(".product-item__image")
        page = 1
        # go through each item on a page (open it up)
        for item in items:
            itemUrl = item.css('a ::attr(href)').get()
            yield response.follow(itemUrl, callback=self.parse_item,
                                  cb_kwargs={'mainCategoryName': mainCategoryName,
                                             'subCategoryName': subCategoryName})

        # go through item pages
        nextPageContainer = response.xpath(
            "//span[@class='pagination-custom__page pagination-custom__page--active']/following-sibling::*[1]")

        if nextPageContainer is not None:
            nextPageUrl = nextPageContainer.css('::attr(href)').get()
            yield response.follow(nextPageUrl, callback=self.parse_item_page,
                                  cb_kwargs={'mainCategoryName': mainCategoryName,
                                             'subCategoryName': subCategoryName})

    def parse_item(self, response, mainCategoryName, subCategoryName):
        moonItem = MoonItem()

        moonItem['name'] = response.css('.product__title ::text').get()
        moonItem['mainCategory'] = mainCategoryName
        moonItem['subCategory'] = subCategoryName
        moonItem['price'] = response.xpath(
            "//div[contains(@class, 'product__price__wrap')]/div[contains(@class, 'product__price')]/span[@data-product-price]/text()").get()



        #moonItem['description']=
        yield moonItem

# TODO

# parse inputs
# download images
# dodatkowe pola (opis, szczegóły i material, jak dbać, cena)
# moze opiniee w osobnej tablicy

# jak bedzie trzeba to dodatkowi agenci zeby nie bylo html error 430
