<?php

namespace XUnit\Tests;

use XUnit\WasRun;

class TestCaseTest
{
    public function testTemplateMethod(): void
    {
        $test = new WasRun('testMethod');
        $test->run();

        assert('setUp testMethod tearDown ' === $test->log);
    }
}