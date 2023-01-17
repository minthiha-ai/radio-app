<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Audio;
use App\Models\Schedule;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    protected $path = 'storage/audios/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Audio::with('schedule')->orderby('id','desc')->paginate(15);
        $schedules = Schedule::orderby('id','desc')->get();

        return view('backend.audios.index', compact('schedules','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        // $this->validate($request, [
        //     'schedule_id' => 'required',
        //     'title' => 'required',
        //     'audio' => 'required',
        // ]);

        // return $request->all();

        $a = new Audio();
        $a->schedule_id = $request->schedule_id;
        $a->title = $request->title;
        if ($request->file('audio')){
            $audio_name = uniqid('r').time().'.'.$request->file('audio')->getClientOriginalExtension();
            $request->file('audio')->move($this->path, $audio_name);
            $a->audio = $audio_name;
        }else{
            $a->audio = '';
        }
        $a->save();

        return redirect(route('audios.index'))->with('success', 'audio created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Audio::findOrFail($id);
        if ($a->audio != '') {
            unlink(public_path($this->path).$a->audio);
        }
        $a->delete();
        return back()->with('success', 'Audio deleted Successfully');
    }
}
