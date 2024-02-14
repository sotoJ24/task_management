<?php

namespace App\Http\Controllers;

use App\Models\Task; 
use App\Models\Priority;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /* ॐ *
     * Display a listing of the resource.
     */
    public function get_houses()
    {
        $houses = House::all();
        return $houses;
    }
    
    public function get_priorities()
    {
        $prioritys = Priority::all(); 
        return $prioritys;
    }


    public function index()
    { 
        $tasks = Task::all();
        $all_tasks = Task::all();

        $priorities = $this->get_priorities(); 
        $houses = $this->get_houses();
        return view('task_view', compact('tasks','all_tasks','priorities','houses'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidateData = Validator::make($request->all(), [
            'task_name' => 'required|max:50',
            'priority_id' => 'required|exists:priorities,id',
            'house_id' => 'required|exists:houses,id',
            'date_task' => 'required|date'
        ]);

        if (!($ValidateData->fails())) {
            Task::create([
                'task_name' => $request->input('task_name'),
                'priority_id' => $request->input('priority_id'),
                'house_id' => $request->input('house_id'),
                'date_task' => $request->input('date_task')
            ]);


            return back()->with('Created','Created task');
        }

        return back()->with('fail',$ValidateData->errors());


    }


    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $priorities = $this->get_priorities();
        return view('edit_task', compact('task','priorities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $ValidateData = Validator::make($request->all(), [
            'task_name' => 'required|max:50',
            'priority_id' => 'required|exists:priorities,id',
            'house_id' => 'required|exists:houses,id',
            'date_task' => 'required|date'
        ]);


        if (!($ValidateData ->fails())) {
            $task -> update([
                'task_name' => $request->input('task_name'),
                'priority_id' => $request->input('priority_id'),
                'house_id' => $request->input('house_id'),
                'date_task' => $request->input('date_task')
            ]);

            return redirect()->intended('/')->with('success','Successfully Updated');
        }

        return back()->with('fail',$ValidateData->errors());



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task  = Task::find($id);

         if($task) {
            $task -> delete();
            return back()->with('deleted','Deleted task');
        }
        return back()->with('fail_destroy','Action could not be completed ');
    }
}
