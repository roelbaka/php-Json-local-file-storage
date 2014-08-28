<?php

namespace srsbsns\Components\FeedReader;

use srsbsns\TestCase;

class FeedReaderTest extends TestCase
{
    private $feedReader;
    private $readUrl;
    private $jsonParser;

    public function setUp()
    {
        $this->readUrl    = $this->getMockBuilder('srsbsns\Components\FeedReader\ReadUrl')
            ->getMock();
        $this->jsonParser = $this->getMockBuilder('srsbsns\Components\FeedReader\JsonParser')
            ->getMock();
 
        $this->feedReader = new FeedReader($this->readUrl,$this->jsonParser);
    }


    /**
     * @test
     */
    public function it_should_return_feed_array()
    {
        $expectedResult = json_decode('{"error": 404}');

        $this->readUrl->expects($this->once())
            ->method('getUrlData');

        $this->jsonParser->expects($this->once())
            ->method('parse')
            ->will($this->returnValue($expectedResult));

        $result = $this->feedReader->createArray("http://www.google.nl");

        $this->assertEquals($expectedResult, $result);
    }

    /**
     *  @test
     *  @expectedException InvalidArgumentException
     */
    public function it_should_not_return_if_parsed_array_empty()
    {
        $expectedResult = [];

        $this->readUrl->expects($this->once())
            ->method('getUrlData');

        $this->jsonParser->expects($this->once())
            ->method('parse')
            ->will($this->returnValue($expectedResult));

        //result will return invalid argument exception because $expectedResult is an empty array.
        $result = $this->feedReader->createArray("http://www.google.nl");
    }
}
