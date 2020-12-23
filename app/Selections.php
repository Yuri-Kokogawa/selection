<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selections extends Model
{
     public static $rules = array(
        'title' => 'required',
        'body1' => 'required',
    );
}
