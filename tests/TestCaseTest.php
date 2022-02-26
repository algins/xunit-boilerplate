<?php

namespace XUnit\Tests;

use XUnit\Test;
use XUnit\TestCase;
use XUnit\TestResult;
use XUnit\TestSuite;

class TestCaseTest extends TestCase
{
    private TestResult $result;

    public function setUp(): void
    {
        $this->result = new TestResult();
    }

    public function testTemplateMethod(): void
    {
        $test = new Test('testMethod');
        $test->run($this->result);

        assert('setUp testMethod tearDown ' === $test->log);
    }

    public function testResult(): void
    {
        $test = new Test('testMethod');
        $test->run($this->result);

        assert('1 run, 0 failed' === $this->result->summary());
    }

    public function testFailedResult(): void
    {
        $test = new Test('testBrokenMethod');
        $test->run($this->result);

        assert('1 run, 1 failed' === $this->result->summary());
    }

    public function testFailedResultFormatting(): void
    {
        $this->result->testStarted();
        $this->result->testFailed();

        assert('1 run, 1 failed' === $this->result->summary());
    }

    public function testSuite(): void
    {
        $suite = new TestSuite();
        $suite->add(new Test('testMethod'));
        $suite->add(new Test('testBrokenMethod'));
        $suite->run($this->result);

        assert('2 run, 1 failed' === $this->result->summary());
    }
}
