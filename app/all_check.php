<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class all_check extends Model
{
    protected $table = 'all_checks';

    public function user_checks(){
      return $this->hasMany('App\user_check');
    }

    public function norm_control(){
      return $this->belongsTo('App\norm_control');
    }

}
