<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
use Auth;
class UserController extends Controller
{
    function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$user = Auth::user();
	    
	    return view('users/index',['pins'=>$user->pins]);
    }

    public function action(){

    }

}
