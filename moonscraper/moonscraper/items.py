# Define here the models for your scraped items
#
# See documentation in:
# https://docs.scrapy.org/en/latest/topics/items.html

import scrapy


class MoonItem(scrapy.Item):
    name = scrapy.Field()
    url = scrapy.Field()
    mainCategory = scrapy.Field()
    subCategory = scrapy.Field()
    priceAfterTax = scrapy.Field()
    priceBeforeTax = scrapy.Field()
    description = scrapy.Field()
    # rating = scrapy.Field()  PROBLEM WITH JAVASCRIPT
    imagesUrl = scrapy.Field()
    tax = scrapy.Field()
    quantity = scrapy.Field()
    active = scrapy.Field()
    inSale = scrapy.Field()
    visibility = scrapy.Field()
    id = scrapy.Field()
    index = scrapy.Field()



