<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable=['name','country'];
    public function songs(){
        return $this->hasMany(Song::class);
    }

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }
}
