<?php

namespace App\Http\Controllers;
use App\Models\trainer;
use App\Models\schedule;
use Illuminate\Http\Request;

class trainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $train = trainer::orderBy('id' , 'asc')->paginate(10);
        return view('trainers', compact('train') );
    }

    public function indexSchedule()
    {
        $scheduler = schedule::orderBy('id' , 'asc')->paginate(10);
        return view('schedule', compact('scheduler') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $trainers = new trainer;
        $trainers->name = $req->name;
        $trainers->phone = $req->phone;
        $trainers->salary = $req->salary;
        $trainers->save();
       
        $schedule = new schedule;
        $schedule->trainer_id = $trainers->id;
        $schedule->Day = $req->day;
        $schedule->Time_in = $req->in;
        $schedule->Time_out = $req->out;
        $schedule->save();

            echo "Record inserted successfully.<br/>";

 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
