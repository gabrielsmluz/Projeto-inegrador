<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
      'table_number'
      'status'
      'total_cents'
      'menu_id'
      'establishment_id'
    ]
}
