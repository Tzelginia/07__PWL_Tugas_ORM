<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/mahasiswa');

        $response->assertStatus(200);
        $response->assertSeeText("Nim");
        $response->assertSeeText("Nama");
        $response->assertSeeText("Kelas");
        $response->assertSeeText("Jurusan");
        $response->assertSeeText("Email");
        $response->assertSeeText("Alamat");
        $response->assertSeeText("Tanggal Lahir");
    }
}
