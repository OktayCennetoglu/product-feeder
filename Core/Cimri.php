<?php

namespace Core;

use Interfaces\CoreInterface;
use Libraries\FileConvert as Convert;

class Cimri implements CoreInterface
{

    public function outputFile($file)
    {
        Convert::jsonFileCreate($file, static::class);
    }
}