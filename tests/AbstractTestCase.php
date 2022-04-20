<?php

namespace Jetimob\Iugu\Tests;

use Jetimob\Iugu\IuguServiceProvider;
use Orchestra\Testbench\TestCase;

class AbstractTestCase extends TestCase
{
    /** @inheritDoc */
    public function getPackageProviders($app): array
    {
        return [IuguServiceProvider::class];
    }
}
