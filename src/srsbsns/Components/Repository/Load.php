<?php

namespace srsbsns\Components\Repository;

class Load
{
    public function Load($path)
    {
        return json_decode(file_get_contents($path),true);
    }
}
