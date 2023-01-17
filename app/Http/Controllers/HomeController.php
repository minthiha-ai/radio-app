<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Schedule::orderby('id', 'desc')->get();
        return view('home', compact('data'));
    }

    public function audio($time, $id)
    {
        $schedule = Schedule::with('audios')->findOrFail($id);

        // return $schedule->audios[0]->audio;

        return view('audio', compact('schedule'));
    }
}
