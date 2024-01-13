import csv
import random
import re

import scrapy

from moonscraper.items import MoonItem


class MoonspiderSpider(scrapy.Spider):
    name = "moonspider"
    allowed_domains = ["moonsister.pl"]
    start_urls = ["https://moonsister.pl/",
                  ]
    categories = {}
    excluded = ["Palo Santo", "Mastermind", "Mentoring"]
    index = 1

    def parse(self, response):
        mainCategories = response.xpath("//div[@class='drawer__menu']/child::*[3]/child::*[2]/child::*[2]/*")
        len(mainCategories)  # 6 main categories
        # go through main categories
        for mainCategory in mainCategories:
            mainCategoryName = mainCategory.xpath("child::*[2]/child::*[1]/a[@class='sliderow__title']/text()").get()
            subCategories = mainCategory.xpath("child::*[2]/child::*[2]/*")
            self.categories[mainCategoryName] = set()
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

        # get subcategory description
        description = ' '.join(response.xpath("//div[contains(@class, 'page-width rte')]//text()").getall())
        if response.url == "https://moonsister.pl/products/drewienko-palo-santo":
            description = ' '.join(response.xpath("//div[contains(@class, 'tab-content__entry')]//text()").getall())
        if subCategoryName not in self.excluded:
            self.categories[mainCategoryName].add((subCategoryName, description))

        # go through each item on a page (open it up)
        for item in items:
            itemUrl = item.css('a ::attr(href)').get()
            yield response.follow(itemUrl, callback=self.parse_item,
                                  cb_kwargs={'mainCategoryName': mainCategoryName,
                                             'subCategoryName': subCategoryName})

        # go through item page container - if on last page this is None
        nextPageContainer = response.xpath(
            "//span[@class='pagination-custom__page pagination-custom__page--active']/following-sibling::*[1]")
        nextPageUrl = nextPageContainer.css('::attr(href)').get()
        if nextPageUrl is not None:
            yield response.follow(nextPageUrl, callback=self.parse_item_page,  # response.follow
                                  cb_kwargs={'mainCategoryName': mainCategoryName,
                                             'subCategoryName': subCategoryName})

    def parse_item(self, response, mainCategoryName, subCategoryName):
        name = response.css('.product__title ::text').get()
        if len(name) > 128:
            return
        moonItem = MoonItem()
        price = response.xpath(
            "//div[contains(@class, 'product__price__wrap')]/div[contains(@class, 'product__price')]/span["
            "@data-product-price]/text()").get()
        price = price.split(' ')[0]
        price = price.replace(".", "")
        price = price.replace(',', '.')
        price = float(price)
        moonItem['name'] = name
        moonItem['url'] = response.url
        moonItem['mainCategory'] = mainCategoryName
        moonItem['subCategory'] = subCategoryName
        moonItem['priceAfterTax'] = price
        moonItem['priceBeforeTax'] = price / 1.23
        moonItem['description'] = ' '.join(
            response.xpath("//div[contains(@class, 'tab-content__entry')]//text()").getall())
        moonItem['imagesUrl'] = response.css('div.product__photo ::attr(src)').getall()
        moonItem['tax'] = 5
        moonItem['quantity'] = 200#random.randint(5, 10)

        if random.random() > 0.1:
            moonItem['active'] = 1
        else:
            moonItem['active'] = 0

        moonItem['inSale'] = 1
        moonItem['visibility'] = "both"
        moonItem['id'] = self.index
        moonItem['index'] = self.index
        # moonItem['rating'] = response.css('.tm-grade-label__text tm-score-platforms ::text').get()
        self.index = self.index + 1

        # moonItem['rating'] = response.css('.tm-grade-label__text tm-score-platforms ::text').get()
        yield moonItem

    def close(self, reason):
        self.saveMainCategoryCsv()
        self.saveCategoryCsv()

    def saveCategoryCsv(self):
        csv_file_path = '../scrapedItems/categories.csv'
        with open(csv_file_path, 'w', newline='', encoding='utf-8') as csvfile:
            csv_writer = csv.writer(csvfile)

            # Write the header row
            csv_writer.writerow(['Active', 'Parent Category', 'Name', 'Description'])

            # Write data to the CSV file
            for key, value in self.categories.items():
                for element in value:
                    csv_writer.writerow([1, key, element[0], re.sub(r'\n', '', element[1]).lstrip()])

    def saveMainCategoryCsv(self):
        csv_file_path = '../scrapedItems/mainCategories.csv'
        with open(csv_file_path, 'w', newline='', encoding='utf-8') as csvfile:
            csv_writer = csv.writer(csvfile)
            csv_writer.writerow(['Active', 'Parent Category', 'Name', 'Description'])
            for key in self.categories.keys():
                csv_writer.writerow([1, 'Sklep', key, ''])
