<?php

namespace srsbsns\Components\FeedReader;

use srsbsns\Components\Assert\Assert;

class JsonParser
{
    public function parse($data){
        Assert::notEmpty($data, 'Parse data Empty');
        Assert::isJsonString($data, 'Is geen valide Json String');

        return json_decode($data);
    }
}
