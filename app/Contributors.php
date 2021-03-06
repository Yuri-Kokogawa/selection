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
    
     public function Categories()
    {
      return $this->belongsTo('App\Categories','category_name_id','category_name_id');
    
    }
    
     public function Answers()
    {
      return $this->hasMany('App\Answers','contributor_id','id');
    
    }
    
     public function User()
    {
      return $this->belongsTo('App\User','user_id','id');
    
    }
}
