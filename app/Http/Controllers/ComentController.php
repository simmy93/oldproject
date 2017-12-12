<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coment;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ComentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function postStoreComent(Request $request, $event_id){

    	$this->validate($request, [
			
			'coment' => 'required|min:5|max:1000'
			]);

    	$coment = new Coment();
    	$coment->coment = $request['coment'];
    	$coment->user_id = Auth::user()->id;
    	$coment->event_id = $event_id;

    	$coment->save();

    	return redirect()->back();

    }
}
