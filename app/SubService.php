<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    protected $fillable = ['service_id', 'name', 'description', 'price', 'cover_img'];

    // public function subservice(){

    //     return $this->belongsTo(Service::class, 'service_id', 'id');
    // }
}
