<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Role;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Auth;
use App\User;

 
class UserController extends Controller
{

	public function getAccount(){

		return view('account', ['user' => Auth::user()]);
	}

	public function postSaveAccount(Request $request){

		$this->validate($request, [
			'name' => 'required|max:120'
			]);
		$user = Auth::user();
		$user->name = $request['name'];
		$user->lname = $request['lname'];
		$user->username = $request['username'];
		$user->update();
		$file = $request->file('image');
		$filename = $user->id . '.jpg';
		if($file){
			Storage::disk('local')->put($filename, File::get($file));
		}
		return redirect()->route('account');
	}

	public function getUserImage($filename){
		$file = Storage::disk('local')->get($filename);
		return new Response($file, 200);
	}

	public function getAllUsers(){

		$users = User::where('id', '!=', Auth::user()->id)->paginate(5);
		

		return view('allusers')->withUsers($users);
	}

	public function postAdminChanges(Request $request){
		$user = User::where('email', $request['email'])->first();
		$user->roles()->detach();
		if ($request['role_user']) {
			$user->roles()->attach(Role::where('name', 'User')->first());
		}

		if ($request['role_admin']) {
			$user->roles()->attach(Role::where('name', 'Admin')->first());
		}
		return redirect()->back();
	}
}
