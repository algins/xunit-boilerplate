<?php

namespace XUnit\Tests;

use XUnit\WasRun;

class TestCaseTest
{
    public function testRun(): void
    {
        $test = new WasRun('testMethod');
        assert(!$test->wasRun);
        $test->run();
        assert($test->wasRun);
    }
}