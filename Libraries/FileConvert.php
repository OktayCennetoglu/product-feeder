<?php

namespace Libraries;

class FileConvert
{

    private static function array2xml($data, $core)
    {
        $xml = new \SimpleXMLElement("<$core/>");
        foreach ($data as $key => $item) {
            $wrapper = $xml->addChild('product');
            array_walk_recursive($item, function ($key, $item) use ($wrapper) {
                $wrapper->addChild($item, $key);
            });
        }
        return $xml->asXML();
    }

    public static function xmlFileCreate($data, $core)
    {
        $core = substr(strrchr($core, '\\'), 1);
        $path = dirname(__DIR__) . "/Files/$core";

        $xml = self::array2xml($data, $core);
        $output = fopen("{$path}-products.xml", "w");
        fwrite($output, $xml);
        fclose($output);
    }

    public static function jsonFileCreate($json, $core)
    {
        $core = substr(strrchr($core, '\\'), 1);
        $path = dirname(__DIR__) . "/Files/$core";
        $output = fopen("$path-products.json", "w");
        fwrite($output, json_encode($json));
        fclose($output);
    }
}