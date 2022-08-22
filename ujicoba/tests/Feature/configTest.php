<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class configTest extends TestCase
{
    function testconfig(){
        $firstName = config("contoh.author.first");
        $lastName = config("contoh.author.last");
        $email = config("contoh.email");

        self::assertEquals('Gial', $firstName);
        self::assertEquals('88', $lastName);
        self::assertEquals("gial88@gmail.com", $email);
    }
}
