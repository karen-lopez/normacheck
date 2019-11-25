<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class norm_control extends Model
{
    //
    protected $table = 'norm_controls';

    public function all_check(){
      return $this->hasMany('App\all_check');
    }

}
