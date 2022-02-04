<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(user::class, 'user_id');
    }
}
