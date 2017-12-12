<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Member;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class MemberController extends Controller
{


	public function __construct()
    {
        $this->middleware('auth');
    }

    public function getStoreMember(Request $request, $event_id){

        $ismember = DB::table('members')->where('event_id', $event_id)->where('user_id', Auth::user()->id)->get();

        if (!$ismember) {
        
        
    	$member = new Member();
    	$member->user_id = Auth::user()->id;
    	$member->event_id = $event_id;

    	$member->save();
        $message = 'Sėkmigai prisijungėte į įvykį';
    	return redirect()->back()->with(['message' => $message]);}
        else {
            $message = 'Jūs jau dalyvaujate įvykyje';
            return redirect()->back()->with(['message' => $message]);
        }

    }

    public function getDeleteMember($event_id){

        DB::table('members')->where('user_id', Auth::user()->id)->where('event_id', $event_id)->delete();

        return redirect()->back();
    }


}
