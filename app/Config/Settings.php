<?php
namespace App\Config;

class Settings {
   
    const SIMPLE = "Testing simple constants!";

    public function get_constant()
    {
        return self::SIMPLE;
    }
}