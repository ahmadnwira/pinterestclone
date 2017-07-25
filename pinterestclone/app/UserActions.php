<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActions extends Model{
	
	protected $fillable = ['user_id','pin_id','action'];

    protected $table = 'user_actions';
    
}
