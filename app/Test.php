<?php
namespace App;

class Test
{
    public function __construct()
    {
        $this->handle();
    }
    public function handle()
    {
        $this->testFunc("testtest");
    }
    public function testFunc(string $string, ?array $array = [])
    {
        var_dump($string);
        var_dump($array);
    }
}