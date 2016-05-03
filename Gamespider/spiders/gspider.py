# -*- coding: utf-8 -*-
import scrapy
from Gamespider.items import GamespiderItem

class GspiderSpider(scrapy.Spider):
    name = "gspider"
    allowed_domains = ["mazika2day.com"]
    start_urls = (
        'http://mazika2day.com/cat,10,%D8%A7%D9%84%D8%B9%D8%A7%D8%A8.html',
    )

    def parse(self, response):
    	for s in response.xpath('//div[@class="boxgrid caption"]'):
    		item = GamespiderItem()
    		item['title'] = s.xpath('div/h3/text()').extract()
    		item['url'] = s.xpath('a/@href').extract()
    		item['desc'] = s.xpath('div/a/text()').extract()
    		item['img'] = s.xpath('a/img/@src').extract()
    		yield item

    	next_page_url = response.xpath('//a[@class="next"]/@href').extract_first()
        absolute_next_page_url = response.urljoin(next_page_url)
        request = scrapy.Request(absolute_next_page_url, callback = self.parse)
        yield request