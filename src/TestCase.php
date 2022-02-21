<?php

namespace XUnit;

class TestCase
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function run(): void
    {
        $method = $this->name;
        $this->{$method}();
    }
}