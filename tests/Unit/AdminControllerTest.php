<?php
/**
 * Created by PhpStorm.
 * User: Sabrae
 * Date: 25.09.2019
 * Time: 13:47
 */

namespace App\Http\Controllers;

//use PHPUnit\Framework\TestCase;
use App\Http\Controllers\AdminController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class AdminControllerTest extends TestCase
{

    public function testShowTeachersList()
    {

    }

    public function testEdit()
    {

    }

    /**
     *
     */
    public function testIndex()
    {
        //$response = $this->get(route('admin.dashboard', [], 'false'));
        $response = $this->get('/');

        $response->assertStatus(200);


    }

    public function testShowUsersList()
    {

    }

    public function testShow()
    {

    }

    public function test__construct()
    {

    }

    public function testShowAdminsList()
    {

    }
}
