<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class envDefaultTest extends TestCase
{
   function testDefaultEnv(){
        $author = env("Youtube");

        self::assertEquals("Koding Indonesia", $author);
   }
}
