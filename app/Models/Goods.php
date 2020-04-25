<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $fillable = [
        'name','unit', 'status', 'is_delete', 'created_by','updated_by',
    ];
}
