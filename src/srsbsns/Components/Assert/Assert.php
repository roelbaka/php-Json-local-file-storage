<?php

namespace srsbsns\Components\Assert;

use Assert\Assertion;

class Assert extends Assertion
{
    protected static $exceptionClass = 'Assert\InvalidArgumentException';
}
