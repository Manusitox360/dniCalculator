<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WordApiTest extends TestCase
{
   
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
