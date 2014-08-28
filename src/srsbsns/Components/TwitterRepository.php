<?php

namespace srsbsns\Components;

use srsbsns\Components\Repository\Repository;
use srsbsns\Components\Repository\File;

class TwitterRepository extends Repository {

    public function save($fileName, $data) {
        $file = new File(RESOURCEPATH, $fileName, $data);
        parent::write($file);

        // @TODO Twitter logic here

    }

}