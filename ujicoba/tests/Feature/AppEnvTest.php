<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\App;

class AppEnvTest extends TestCase
{
    public function test(){
        if (App::environment('local')) {
            echo"logic in local", PHP_EOL;
            self::assertTrue(True, 'berhasil');
        }
        
    }
}
