<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selections extends Model
{
    
    protected $guarded = array('id');
    
    public static $rules = array(
         
        'title' => 'required',
        'body1' => 'required',
        
        
    );
}
