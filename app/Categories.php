<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
     protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'category_name' => 'required',
        'body' => 'required',
    );

    
    public function Contributors()
    {
      return $this->hasMany('App\Contributors');

    }
}
