<?php

namespace srsbsns\Components\Repository;

class File
{
    private $path;
    private $name;
    private $contents;

    public function __construct($path, $name, $contents)
    {
        $this->path     = $path;
        $this->name     = $name;
        $this->contents = $contents;
    }

    public function getPath(){
        return $this->path;
    } 

    public function getName()
    {
        return $this->name;
    }

    public function getContents()
    {
        return $this->contents;
    }

    public function getFullPath()
    {
        return $this->path.$this->name.".json";
    }
}
