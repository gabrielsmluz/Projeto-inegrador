<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Establishment;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */

  use RegistersUsers;

  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
  protected $redirectTo = RouteServiceProvider::HOME;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
      'address' => ['required'],
      'cpf' => ['required'],
      'phone' => ['required'],
      'type' => ['required'],
      'company_name' => ['required'],
      'trading_name' => ['required'],
      'cnpj' => ['required'],
      'establishment_address' => ['required'],
      'establishment_phone' => ['required'],
    ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return \App\Models\User
   */
  protected function create(array $data)
  {
     $establishment = Establishment::create([
    'company_name'=>$data['company_name'],
    'trading_name'=>$data['trading_name'],
    'cnpj'=>$data['cnpj'],
    'establishment_address'=>$data['establishment_address'],
    'establishment_phone'=>$data['establishment_phone'],
     ]); 

    return User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
      'address' => $data['address'],
      'cpf' => $data['cpf'],
      'phone' => $data['phone'],
      'type' => $data['type'],
      'establishment_id'=>$establishment->id,


    ]);
  }
}
