<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
use Auth;
use App\UserActions ;
use App\Pin;
class UserController extends Controller
{
    function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$user = Auth::user();
	    
	    return view('users/index',['pins'=>$user->pins,'actions'=>$user->actions]);
    }

  public function userAction($action,$pin_id){
  	  	Pin::whereId($pin_id)->increment($action);
  		UserActions::create(['action'=>$action, 'pin_id'=>$pin_id, 'user_id'=>Auth::id()]);
  		return back();
  }

  public function showAlbum($user_id){
    $user = User::find($user_id);
    return view('home',['pins'=>$user->pins,'name'=>$user->name]) ;
  }
}
