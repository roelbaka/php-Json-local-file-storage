<?php

namespace srsbsns\Components\Repository;

abstract class Repository
{
    private $save;
    private $load;

    public function __construct()
    {
        $this->save = new Save();
        $this->load = new Load();
    }

    abstract function save($fileName, $data);

    public function write(File $file){
        $this->save->save($file);
    }

    public function load($filePath)
    {
        return $this->load->load(RESOURCEPATH.$filePath);
    }
}
