<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class establishment extends Model
{
    use HasFactory;

    protected $fillable = [
      'cnpj'
      'trading_name'
      'company_name'
      'adress'
      'phone'
    ]
}
