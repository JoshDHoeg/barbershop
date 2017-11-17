<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{

    /** @test */
    public function guests_cant_edit_shop()
    {
        $this->get('/store/1/edit')
            ->assertRedirect('/login');
    }


    /** @test */
    public function homeRedirectTest()
    {
        $response = $this->get('/');
        $response->assertStatus(302);
    }

  }
