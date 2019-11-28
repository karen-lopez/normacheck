<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class check_list extends Model
{
    //
    protected $table = 'check_lists';

    public function user(){
        return $this->belongsTo('App\user');
    }

    public function user_checks(){
        return $this->hasMany('App\user_check');
    }

}
