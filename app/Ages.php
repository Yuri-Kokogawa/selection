<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ages extends Model
{
    protected $guarded = array('id');

    
    public static $rules = array(
        'age_name' => 'required',
        
    );
    
    public function User()
    {
      return $this->hasMany('App\User');

    }
}
