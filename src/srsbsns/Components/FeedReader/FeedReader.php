<?php

namespace srsbsns\Components\FeedReader;

use srsbsns\Components\Assert\Assert;

class FeedReader
{
    private $jsonParser;
    private $readUrl;

    public function __construct(Readurl $readUrl, JsonParser $jsonParser){
        $this->readUrl    = $readUrl;
        $this->jsonParser = $jsonParser;
    }

    public function createArray($url)
    {
        $urlData = $this->readUrl->getUrlData($url);
        $array   = $this->jsonParser->parse($urlData);

        Assert::notEmpty($array, 'Geen Array returned door FeedReader');

        return $array;
    }
}
