<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['service_id', 'sub_service_id', 'name', 'description', 'price', 'cover_img'];

}
