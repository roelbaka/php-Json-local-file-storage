<?php

namespace srsbsns\Components;

use srsbsns\Components\Repository\Repository;
use srsbsns\Components\Repository\File;

class StreamRepository extends Repository
{
    private $fileName = "streamers";

    public function save($streamerData){
        parent::save('', $this->fileName, $streamerData);
    }

    public function loadAll()
    {
        return parent::loadAll($this->filePath);
    }

    public function load()
    {
        return parent::load($this->filePath.$this->fileName);
    }
}
