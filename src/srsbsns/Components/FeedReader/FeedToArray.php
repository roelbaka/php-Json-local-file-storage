<?php

namespace srsbsns\Components\FeedReader;

class FeedToArray
{
    public function create($url)
    {
        $feedreader = new FeedReader(new ReadUrl(), new JsonParser());

        return $feedreader->createArray($url);
    }
}
