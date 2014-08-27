<?php

namespace srsbsns\Components\FeedReader;

use srsbsns\TestCase;

class JsonParserTest extends TestCase
{
    private $jsonParser;

    public function setUp()
    {
        $this->jsonParser = new JsonParser();
    }

    /**
     * @test
     */
    public function it_should_return_parsed_data()
    {
        $array = ['s1','s2'];
        $jsonvar = json_encode($array);
        $result = $this->jsonParser->parse($jsonvar);

        $expectedResult = $array;

        $this->assertEquals($expectedResult, $result);
    }
}
