<?php

namespace Core;

use Interfaces\CoreInterface;
use Libraries\FileConvert as Convert;

class Facebook implements CoreInterface
{

    public function outputFile($file)
    {
        Convert::xmlFileCreate($file, static::class);
        Convert::jsonFileCreate($file, static::class);
    }
}