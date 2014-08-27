<?php
/**
 * Created by PhpStorm.
 * User: rory
 * Date: 27-08-14
 * Time: 21:47
 */

namespace srsbsns\Components;


use srsbsns\Components\Repository\Repository;

class TwitterRepository extends Repository {

    public function save($filePath, $fileName, $contents) {
        parent::save($filePath, $fileName, $contents);

        // @TODO Twitter logic here

    }

}