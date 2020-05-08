<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'discription', 'cover_img'];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
