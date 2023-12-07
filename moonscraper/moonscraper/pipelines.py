# Define your item pipelines here
#
# Don't forget to add your pipeline to the ITEM_PIPELINES setting
# See: https://docs.scrapy.org/en/latest/topics/item-pipeline.html
import re

from itemadapter import ItemAdapter


# useful for handling different item types with a single interface


class MoonscraperPipeline:
    def process_item(self, item, spider):
        adapter = ItemAdapter(item)

        # delete \n from name and price
        n_fields = ['name']
        for n_field in n_fields:
            value = adapter.get(n_field)
            adapter[n_field] = value.replace('\n', '')

        # ALREADY DID IN SCRAPPING
        # remove zl from price and parse as float
        # price_fields = ['price']
        # for price_field in price_fields:
        #     value = adapter.get(price_field)
        #     value = value.split(' ')[0]
        #     value = value.replace(',', '.')
        #     adapter[price_field] = float(value)

        # lowercase categories
        lowercase_fields = ['mainCategory', 'subCategory']
        for lowercase_field in lowercase_fields:
            value = adapter.get(lowercase_field)
            adapter[lowercase_field] = value.lower()

        # delete NBSP ZWSP and \n from description
        nbsp_fields = ['description']
        for nbsp_field in nbsp_fields:
            value = adapter.get(nbsp_field)
            value = re.sub(r' ', ' ', value)
            value = re.sub(r'​', ' ', value)
            value = re.sub(r'\n', '', value)
            adapter[nbsp_field] = value

        # delete // from zdjecia
        doubleslash_link_fields = ['imagesUrl']
        for doubleslash_link_field in doubleslash_link_fields:
            value = adapter.get(doubleslash_link_field)
            newValue = [url.replace('//', 'https://', 1) for url in value]
            adapter[doubleslash_link_field] = newValue

        # round up prices to 2 decimal point
        round_price_fields = ['priceBeforeTax', 'priceAfterTax']
        for round_price_field in round_price_fields:
            value = adapter.get(round_price_field)
            value = round(value, 2)
            adapter[round_price_field] = value

        return item
