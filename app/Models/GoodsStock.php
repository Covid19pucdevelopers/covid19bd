<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsStock extends Model
{
    protected $fillable = [
        'tbl_goods_id','quantity', 'status', 'is_delete', 'created_by','updated_by',
    ];
}
