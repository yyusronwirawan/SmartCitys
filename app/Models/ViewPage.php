<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewPage extends Model
{
    use HasFactory;

    protected $table = 'view_pages';
    protected $primarykey = 'id';
    protected $guarded = [];
}
