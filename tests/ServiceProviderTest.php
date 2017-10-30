<?php

namespace Ridrog\AdminLte\Test;

use Illuminate\Support\ServiceProvider;
use Ridrog\AdminLte\AdminLteServiceProvider;
use Ridrog\AdminLte\Test\TestCase as TestCase;

class ServiceProviderTest extends TestCase
{

    /**
     *
     * @var AdminLteServiceProvider
     */
    private $provider;

    /**
     * Setup
     */
    public function setUp()
    {
        parent::setUp();

        $this->provider = $this->app->getProvider(AdminLteServiceProvider::class);

    }

    /**
     * Tear Down
     */
    public function tearDown()
    {
        unset($this->provider);

        parent::tearDown();
    }

    /** @test */
    public function it_can_be_instantiated()
    {
        $expectations = [
             \Illuminate\Support\ServiceProvider::class,
            AdminLteServiceProvider::class
        ];

        foreach ($expectations as $expected) {
            $this->assertInstanceOf($expected, $this->provider);
        }
    }

}