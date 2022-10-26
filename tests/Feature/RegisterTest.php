<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_should_show_register_form()
    {
        $response = $this->get('/register');

        $response->assertStatus(200)
          ->assertSeeText('Cadastro');
    }

    public function test_shouldnt_register_user_when_invalid_data()
    {
        $response = $this->post('/register');

        $response->assertRedirect()
          ->assertInvalid(['name','email','password','cpf','address','phone','type','cnpj','trading_name','company_name','establishment_address','establishment_phone']);
    }

    public function test_should_register_user_when_valid_data()
    {
        $response = $this->post('/register',[
          'name' => 'Gabriel',
          'email' => 'gabrielsmluz@hotmail.com',
          'password' => 'senha123',
          'password_confirmation' => 'senha123',
          'cpf' => '77777777777777',
          'address' => 'Rua XV de Novembro, 42069',
          'phone' => '42999113272',
          'type' => 'manager',
          'cnpj' => '1239812397590291',
          'trading_name' => 'Brigadeiria Leitão da Luz',
          'company_name' => 'Brigadeiria Leitão da Luz LTDA.',
          'establishment_address' => 'Rua Saldanha Marinho, 3410',
          'establishment_phone' => '4236264305',
        ]);

        $response->assertRedirect()
          ->assertSessionHasNoErrors();
        
        $this->assertDatabaseHas('users',['email' => 'gabrielsmluz@hotmail.com']);
        
        $this->assertDatabaseHas('establishments',['cnpj' => '1239812397590291']);
    }
}
