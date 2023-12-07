import os

from scrapy.crawler import CrawlerProcess

from moonscraper.spiders.moonspider import MoonspiderSpider


def run_spider(filename):
    if os.path.exists(filename):
        os.remove(filename)
    extension = filename.split('.')[-1]
    process = CrawlerProcess(settings={
        "ITEM_PIPELINES": {
            'moonscraper.pipelines.MoonscraperPipeline': 300,
            # Other enabled pipelines...
        },
        "FEEDS": {
            filename: {"format": extension, "encoding": "utf-8"},
        },
    })
    process.crawl(MoonspiderSpider)
    process.start()


if __name__ == "__main__":
    run_spider("../scrapedItems/items.csv")
