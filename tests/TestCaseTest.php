<?php

namespace XUnit\Tests;

use XUnit\WasRun;

class TestCaseTest
{
    private WasRun $test;

    public function setUp(): void
    {
        $this->test = new WasRun('testMethod');
    }

    public function testRun(): void
    {
        $this->test->run();
        assert($this->test->wasRun);
    }

    public function testSetUp(): void
    {
        $this->test->run();
        assert($this->test->wasSetUp);
    }
}