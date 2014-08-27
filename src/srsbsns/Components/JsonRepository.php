<?php

namespace srsbsns\Components;

use srsbsns\Components\Repository\Repository;
use srsbsns\Components\Repository\File;

class JsonRepository extends Repository
{
    public function save ($fileName, $data) 
    {
        parent::save(RESOURCEPATH, $fileName, $data);
    }

    public function load($fileName)
    {
        return parent::load($this->filePath.$fileName);
    }
}
