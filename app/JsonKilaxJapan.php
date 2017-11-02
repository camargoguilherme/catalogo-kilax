<?php
/**
 * Created by PhpStorm.
 * User: guilherme
 * Date: 30/10/17
 * Time: 19:41
 */

namespace App;


class JsonKilaxJapan
{
    public $dirJson;
    public function __construct()
    {

    }

    public static function getDirJson() : string
    {
        return __DIR__."/kilax-japan.json";
    }

}