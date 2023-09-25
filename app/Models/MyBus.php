<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyBus extends Model
{
  const TABLE = 'my_buses';

  use HasFactory;

  protected $fillable = ['number'];
}
