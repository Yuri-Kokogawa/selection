<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
         
        'user_id' => 'required',
        'contributor_id' => 'required',
        'answer' => 'required',
    );
    
     public function Contributors()
    {
      return $this->belongsTo('App\Contributors','contributor_id,','id');
    
    }
     public function User()
    {
      return $this->hasOne('App\User','user_id,','id');
    
    }
    
}
