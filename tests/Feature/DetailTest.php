<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DetailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/mahasiswa/2041720048');

        $response->assertStatus(200);
        
        $response->assertSeeText("Nim: 2041720048");
        $response->assertSeeText("Nama: Tzelginia Noer Cahyani");
        $response->assertSeeText("Kelas: TI 2F");
        $response->assertSeeText("Jurusan: Jurusan Teknologi Informasi");
        $response->assertSeeText("Email: tzelginia78@gmail.com");
        $response->assertSeeText("Alamat: Sidoarjo");
        $response->assertSeeText("Tanggal Lahir: 09-07-2002");
    }
}
