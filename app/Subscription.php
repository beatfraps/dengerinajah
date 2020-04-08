<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //
    public function member(){
        return $this->belongsTo(Member::class);
    }

    public function artist(){
        return $this->belongsTo(Artist::class);
    }
}
