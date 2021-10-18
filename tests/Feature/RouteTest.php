<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home()//тест на маршрут главной страницы
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_registration(){ //тест на маршрут страницы с регистрацией
        $response = $this->get('/registration');
        $response -> assertOk();
    }

    public function test_logout(){//тест на маршрут страницы с авторизацией
        $response = $this->get('/logout');
        $response -> assertOk();
    }

    public function test_delivey(){//тест на маршрут страницы доставки
        $response = $this->get('/delivery');
        $response -> assertOk();
    }

    public function test_stoke(){//тест на маршрут страницы с акциями
        $response = $this->get('/stoke');
        $response -> assertOk();
    }

    public function test_product(){//тест на маршрут страницы с товаром
        $response = $this->get('/product');
        $response -> assertOk();
    }

    public function test_contacts(){//тест на маршрут страницы с товаром
        $response = $this->get('/contacts');
        $response -> assertOk();
    }


}
