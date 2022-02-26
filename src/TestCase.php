<?php

namespace XUnit;

use Exception;

class TestCase
{
    private string $methodName;

    public function __construct(string $methodName)
    {
        $this->methodName = $methodName;
    }

    public function setUp(): void
    {
        //
    }

    public function run(TestResult $result): void
    {
        $result->testStarted();
        $this->setUp();

        try {
            $this->{$this->methodName}();
        } catch (Exception $e) {
            $result->testFailed();
        }

        $this->tearDown();
    }

    public function tearDown(): void
    {
        //
    }
}
