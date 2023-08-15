<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structural extends Model
{
    use HasFactory;

    protected $table = 'structural';
    protected $primarykey = 'id';
    protected $guarded = [];
}
