<?php

namespace srsbsns\Components\FeedReader;

use srsbsns\Components\Assert\Assert;
use RunTimeException;

class ReadUrl
{
    public function getUrlData($url)
    {
     Assert::url($url, $url . ' is not a valid URL');

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);

        $data = curl_exec($ch);

        $this->checkUrlValid($data);

        return $data;
    }

    private function checkUrlValid($data)
    {
        if ($data === FALSE) {
            throw new RuntimeException('Stream is down');
        }
    }
}
