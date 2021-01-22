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
    
     public function Users()
    {
      return $this->belongsTo('App\User','users_id','users_id','App\contributor_id,contributor_id');
    
    }
}
