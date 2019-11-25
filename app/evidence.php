<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evidence extends Model
{
    //
    protected $table = 'evidence';

    public function comment(){
        return $this->belongsTo('App\comment');
    }
}
