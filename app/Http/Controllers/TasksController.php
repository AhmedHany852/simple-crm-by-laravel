<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::get();
        return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'details' => 'required',
        ]);
        $tasks=Task::create([
            'name'=>$request->name,
            'details'=>$request->details,
            'completed'=>$request->completed,
            'completed_at'=>$request->completed_at,
            'approval'=>$request->approval,

        ]);
            return redirect('/tasks')->with('success', ' successfully create new Task');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $tasks=Task::get();
        return view('tasks.edit', [
            'client' => Task::findOrFail($id)
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $task = Task::find($id);
        return view('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task ,$id)
    {
        $tasks = Task::find($id);
        $task->name=$request->name;
        $task->details=$request->details;
        $task->completed=$request->completed;
        $task->completed_at=$request->completed_at;
        $task->approval=$request->approval;
        $task->save();
        return redirect('/tasks')->with('success', 'tasks Data is successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks=Task::find($id);
        $tasks->delete();
        return redirect('/tasks')->with('success', 'task Data is successfully deleted');
    }
}
