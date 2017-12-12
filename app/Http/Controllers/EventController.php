<?php 
namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
/**
* 
*/
class EventController extends Controller
{	

	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function postCreateEvent(Request $request)
	{

		$this->validate($request, [
			'place' => 'required|max:100',
			'start' => 'required',
			'finish' => 'required',
			'number' => 'required',
			'description' => 'required|max:1000'
			]);
		$event = new Event();
		$event->place = $request['place'];
		$event->start = $request['start'];
		$event->finish = $request['finish'];
		$event->type = $request['type'];
		$event->number = $request['number'];
		$event->description = $request['description'];

		$message = 'Nepavyko sukurti įvykio...';
		if ($request->user()->events()->save($event)){
			$message = 'Įvykis sėkmingai sukurtas!';
		}
		return redirect()->back()->with(['message' => $message]);
	}

	public function getAllEvents(){

		$events = Event::where('user_id', '!=', Auth::user()->id)->paginate(5);
		

		return view('allevents')->withEvents($events);
	}

	public function getShowEvent($id){

		$event = Event::find($id);

		return view('event')->withEvent($event);
	}

	public function getMyEvents(){
		
		$events = Event::where('user_id', Auth::user()->id)->paginate(5);

		return view('myevents')->withEvents($events);
	}

	public function getJoinedEvents(){

		$user = Auth::user();	

		return view('joinedevents')->withUser($user);
	}

	public function getEventImage($filename){
		$file = Storage::disk('local')->get($filename);
		return new Response($file, 200);
	}

		


}