<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    //
    public function discussion(){
    	return $this->hasMany('App\Participant');
    }
}
