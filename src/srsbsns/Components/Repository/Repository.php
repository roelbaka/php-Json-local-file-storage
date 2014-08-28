<?php

namespace srsbsns\Components\Repository;

class Repository
{
    private $save;
    private $load;

    public function __construct()
    {
        $this->save = new Save();
        $this->load = new Load();
    }

    public function save($file){
        $this->save->save($file);
    }

    public function load($filePath)
    {
        return $this->load->load(RESOURCEPATH.$filePath);
    }
}
