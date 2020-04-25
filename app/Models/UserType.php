<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable=[
        'name', 'status', 'is_delete', 'created_by','updated_by',
    ];
}
