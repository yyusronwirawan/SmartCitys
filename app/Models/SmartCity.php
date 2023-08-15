<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmartCity extends Model
{
    use HasFactory;

    protected $table = 'smart_cities';
    protected $primarykey = 'id';
    protected $guarded = [];
}
