<div>
    <div class='overflow-x-auto w-full'>
            <table id="taskList" class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                <thead class="bg-gray-900">
                    <tr class="text-white text-left">
                        <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4"> id </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Name Task </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Name House </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Priority </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Date Task </th>
                        <th class="font-semibold text-sm px-6 py-4 text-center"><a href="#addEmployeeModal" data-toggle="modal" class="btn btn-success">Create Task</a></th>
                        <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                    </tr>
                </thead>


                <tbody wire:sortable="updatePriorityTask" class="divide-y divide-gray-200">

                    @foreach ($tasks as $task)
                    <tr wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}" wire:sortable.handle>
                        <td class="px-6 py-4 text-center"><i class="fa fa-arrows-alt"></i></td>
                        <td class="px-6 py-4 text-center"> {{$task->id}} </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p>{{$task->task_name}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center"> {{$task->house->house_name}} </td>
                        @php
                            $priorityClasses = [
                                1 => 'bg-red-600',
                                2 => 'bg-yellow-600',
                                3 => 'bg-green-600',
                            ];
                        @endphp

                        <td class="px-6 py-4 text-center">
                            <span class="{{ $priorityClasses[$task->priority_id] }} text-white text-sm w-1/3 pb-1 bg-red-600 font-semibold px-2 rounded-full">
                                {{ $task->priority->priority_name }}
                            </span>
                        </td>

                        <td class="px-6 py-4 text-center"> {{$task->date_task}} </td>
                        <td class="px-6 py-4 text-center"> <a type="button"  href="{{route('edit_task',$task->id)}}"  class="btn btn-warning">Edit Task</a></td>
                        <td class="px-6 py-4"> <a type="button" data-toggle="modal"  href="#deleteTaskModal{{$task->id}}" class="btn btn-danger">Delete Task</a></td>

                    </tr>
                    @include('modal_delete')
                    @endforeach
                </tbody>

            </table>
        </div>
</div>


