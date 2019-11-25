<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    protected $table = 'comments';

    public function evidence(){
        return $this->belongsTo('App\evidence');
    }

    public function user_check(){
        return $this->belongsTo('App\user_check');
    }

}
