<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class envTest extends TestCase
{
    function TestEnv(){
        $appName = env("Youtube");

        self::assertEquals("Koding Indonesia", $appName);
    }
}
