<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;
use App\Models\Priority;

class TasksTable extends Component
{

    public $priority_id= null;

    public function getTasksByOrder()
    {
        return Task::with('priority')
        ->when($this->priority_id, function ($query, $priority_id){
                return $query->where('priority_id',$priority_id);
        })
        ->orderBy('priority_id','asc')
        ->paginate(10);


    }

    public function render()
    {
        $tasks = $this->getTasksByOrder();

        return view('livewire.tasks-table',compact('tasks'));
    }

    public function updatePriorityTask($items)
    {
        $prioritiesIds = Priority::pluck('id')->toArray();


        foreach ($items as $index => $item) {
            
            $priorityId = $prioritiesIds[$index] ?? null;

            if ($priorityId !== null) {
                    Task::find($item['value'])->update(['priority_id' => $priorityId]);
            }



        }

      return redirect()->back();
    }

}
