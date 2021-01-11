<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ages extends Model
{
    protected $guarded = array('id');

    
    public static $rules = array(
        'age_name' => 'required',
        
    );
    
    public function histories()
    {
      return $this->hasMany('App\History');

    }
}
