<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_check extends Model
{
    //
    protected $table = 'user_checks';

    public function all_check(){
      return $this->belongsTo(App\all_check);
    }

    public function comment(){
      return $this->hasOne(App\comment);
    }

}
