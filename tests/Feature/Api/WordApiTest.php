<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Word;

class WordApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_calculate_module_and_find_word_by_module()
    {
        // Create a Word instance in the database with a specific module
        $word = Word::create(['word' => 'example', 'module' => 1]);

        // Call the API endpoint with a DNI that results in the module 1
        $response = $this->postJson('/api/word', ['dni' => 23]);

        // Check if the response is as expected
        $response->assertStatus(200)
                 ->assertJson([
                     'completeDNI' => '23example'
                 ]);
    }
}
