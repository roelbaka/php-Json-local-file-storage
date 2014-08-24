<?php

namespace srsbsns\Components\Repository;

class FileWriter
{
    public function write(File $file)
    {
       $fileWrite = fopen($file->getFullPath(), 'w') or die("can't open file");
       fwrite($fileWrite, json_encode($file->getContents()));
       fclose($fileWrite);

        return $file->getName();
    }
}
