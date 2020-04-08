<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=['id','name','joinedDate'];
    public function Subscriptions(){
        return $this->hasMany(Subscription::class);
    }
}
