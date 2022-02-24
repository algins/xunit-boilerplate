<?php

namespace XUnit\Tests;

use XUnit\TestResult;
use XUnit\WasRun;

class TestCaseTest
{
    public function testTemplateMethod(): void
    {
        $test = new WasRun('testMethod');
        $result = $test->run();

        assert('1 run, 0 failed' === $result->summary());
    }

    public function testFailedResult(): void
    {
        $test = new WasRun('testBrokenMethod');
        $result = $test->run();

        assert('1 run, 1 failed' === $result->summary());
    }

    public function testFailedResultFormatting(): void
    {
        $result = new TestResult();
        $result->testStarted();
        $result->testFailed();

        assert('1 run, 1 failed' === $result->summary());
    }
}