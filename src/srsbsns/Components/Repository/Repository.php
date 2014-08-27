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

    public function save($filePath, $fileName, $contents){
        $file = new File($filePath, $fileName, $contents);
        $this->save->save($file);
    }

    public function load($filePath)
    {
        return $this->load->load(RESOURCEPATH.$filePath);
    }
}
