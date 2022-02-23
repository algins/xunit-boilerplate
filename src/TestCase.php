<?php

namespace XUnit;

class TestCase
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function run(): TestResult
    {
        $result = new TestResult();
        $result->testStarted();

        $this->setUp();
        $this->{$this->name}();
        $this->tearDown();

        return $result;
    }
}