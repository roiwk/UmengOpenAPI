<?php

namespace Roiwk\UmengOpenAPI;

use Roiwk\UmengOpenAPI\App\Apptrack;
use Roiwk\UmengOpenAPI\App\Uapp;
use Roiwk\UmengOpenAPI\App\Umini;

class Factory
{
    public static function umini(array $config)
    {
        return new Umini($config);
    }

    public static function uapp(array $config)
    {
        return new Uapp($config);
    }

    public static function apptrack(array $config)
    {
        return new Apptrack($config);
    }
}