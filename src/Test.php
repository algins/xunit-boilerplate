<?php

namespace XUnit;

use Exception;

class Test extends TestCase
{
    public string $log = '';

    public function __construct(string $methodName)
    {
        parent::__construct($methodName);
    }

    public function setUp(): void
    {
        $this->log .= 'setUp ';
    }

    public function testMethod(): void
    {
        $this->log .= 'testMethod ';
    }

    public function testBrokenMethod(): void
    {
        throw new Exception();
    }

    public function tearDown(): void
    {
        $this->log .= 'tearDown ';
    }
}
