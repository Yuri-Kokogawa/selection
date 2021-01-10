<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contributors extends Model
{
    
    protected $guarded = array('id');
    
    public static $rules = array(
         
        'category_name_id' => 'required',
        'body' => 'required',
        
        
    );
}
