<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pin ;
use Auth ;
class PinController extends Controller{
    
    function __construct(){
    	$this->middleware('auth',[ 'except' => ['index','recent'] ]);
    }


    public function index(){
        $recent = Pin::limit(5)->get();
    	return view('home',['pins'=>$recent]);
    }

    public function recent(){
        
        $recent = Pin::limit(30)->get();

        return view('pins/recent',['pins'=>$recent]);
    }

    /*renders form to insert pin*/
    public function new(){
        return view('pins/new');
    }

    /*renders form to insert pin*/
    public function store(Request $request){
        
        $this->validate($request, [
                'title' => 'required|max:140',
                'url' => 'required',
            ]);

        Pin::create(['user_id'=>Auth::id(),'title'=>request('title'),'url'=>request('url')]);
        
        return redirect('/yourboard');
    }

    public function delete(Pin $pin){
        $pin->delete();
       return redirect('/yourboard');
    }

    public function detailes($id){
        
        return view('pins/pin',['pin'=>Pin::find($id)]);
    }
}
