<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Client;
use App\File;
use App\Project;
use App\Leader;
use App\Team;
use App\Latest;
use App\User;
use App\Participant;
use App\Discussion;
use DB;
use Session;


class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        //
        Session::put('project', $id);
        $teams = Team::all();
        $clients = Client::all();
        $leaders = Leader::all();
        $tasks = Task::all();
        $files = File::all();
        $projects = Project::all();
        $latests = Latest::all();
        $users = User::all();
        $participants = DB::table('participants')->join('discussions as dis', 'dis.discussion', '=', 'participants.discussion')->select('dis.id as id','dis.name as name', 'dis.discussion as discussion','dis.participant as part','participants.name as participant','dis.user_id as user_id')->get();
        
        return view('view.index', compact('clients','tasks','files','projects','leaders','teams','latests','users','participants'));

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
