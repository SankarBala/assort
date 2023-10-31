<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlatBuySale extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'address', 'flat_size'];
}
