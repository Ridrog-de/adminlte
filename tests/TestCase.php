<?php

namespace Ridrog\AdminLte\Test;

use Ridrog\AdminLte\AdminLteServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{

    /* ------------------------------------------------------------------------------------------------
     |  Bench Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function setUp()
    {
        parent::setUp();

        $this->app['config']->set('app.key', 'base64:5dTP2fhCib9UPEHrqWTgq6F/SvvaU93MUgn3UwcopAw=');
    }

    protected function getPackageProviders($app)
    {
        return [
            AdminLteServiceProvider::class,
        ];
    }
}