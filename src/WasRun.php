<?php

namespace XUnit;

class WasRun extends TestCase
{
    public bool $wasRun;
    public bool $wasSetUp;

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function setUp(): void
    {
        $this->wasRun = false;
        $this->wasSetUp = true;
    }

    public function testMethod(): void
    {
        $this->wasRun = true;
    }
}