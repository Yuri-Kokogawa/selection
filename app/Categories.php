<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
     protected $guarded = array('category_name_id');

    
    public static $rules = array(
        'category_name' => 'required',
    );

    
    public function Contributors()
    {
      return $this->hasMany('App\Contributors');

    }
}
