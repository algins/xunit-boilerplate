<?php

namespace XUnit;

use Exception;

class WasRun extends TestCase
{
    public string $log = '';

    public function __construct(string $name)
    {
        parent::__construct($name);
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
