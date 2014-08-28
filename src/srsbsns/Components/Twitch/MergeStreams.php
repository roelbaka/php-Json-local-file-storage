<?php

namespace srsbsns\Components\Twitch;

use srsbsns\Components\FeedReader\FeedToArray;

class MergeStreams
{
    public $feedToArray;

    public function __construct(FeedToArray $feedToArray) 
    {
        $this->feedToArray = $feedToArray;
    }

    public function merge($url, $streamers)
    {
        $streamerData = array();
        foreach ($streamers as $streamer) {
            $streamerData[$streamer] = $this->feedToArray->create($url.$streamer);
        }
        return $streamerData;
    }
}
