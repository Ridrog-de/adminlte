<?php

namespace Ridrog\AdminLte\Test;

use Ridrog\AdminLte\Test\TestCase as TestCase;

class BasicTest extends TestCase
{

    /** @test */
    public function this_is_a_basic_test()
    {
        $this->assertTrue(true);
    }


    /** @test */
    public function this_is_a_basic_test2()
    {
        $this->assertFalse(false);
    }
}