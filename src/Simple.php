<?php
namespace App;

class Simple
{
    protected $test;

    public function get() : string
    {
        return $this->test;
    }

    public function set($test) : void
    {
        $this->test = $test;
    }
}
