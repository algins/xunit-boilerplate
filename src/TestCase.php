<?php

namespace XUnit;

use Exception;

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

        try {
            $this->{$this->name}();
        } catch (Exception $e) {
            $result->testFailed();
        }

        $this->tearDown();

        return $result;
    }
}