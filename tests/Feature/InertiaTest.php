<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Inertia\Testing\Assert;
use Tests\TestCase;

class InertiaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
         dd($this->get('/users'));
//            ->assertInertia(function (Assert $page){
//                $page->component('Users/Index')
//                    ->has('users')
//                    ->has('title')
//                    ->where('title', 'Users')
//                    ->has('users.data')
//                    ->has('users.links');
//            });

    }
}
