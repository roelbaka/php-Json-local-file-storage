<?php

namespace srsbsns\Components\Repository;

class Save
{
    public function save(File $file)
    {
        $fileWriter = new FileWriter();
        $fileWriter->write($file);
    }
}
