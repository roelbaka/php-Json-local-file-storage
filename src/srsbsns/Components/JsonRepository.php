<?php

namespace srsbsns\Components;

use srsbsns\Components\Repository\Repository;
use srsbsns\Components\Repository\File;

class JsonRepository extends Repository
{
    public function save ($fileName, $data) 
    {
        $file = new File(RESOURCEPATH, $fileName, $data);
        parent::write($file);
    }

    public function load($fileName)
    {
        return parent::load(RESOURCEPATH.$fileName);
    }
}
