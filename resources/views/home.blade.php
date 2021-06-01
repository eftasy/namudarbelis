@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <table class="table">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col"><i class="fas fa-clipboard-list"></i></th>
                        <th scope="col">Subject</th>
                        <th scope="col">Priority</th>
                        <th scope="col">Due date</th>
                        <th scope="col">State</th>
                        <th scope="col">Percent completed</th>
                        <th scope="col">Modified on</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td scope="row">
                            <span class="badge rounded-pill bg-success">
                                <i class="fas fa-check-square"></i>
                            </span>
                        </td>
                        <td>
                            @if($task->progress == '100%')
                            <i class="fas fa-check checkmark-active"></i><span style="color:gray"><del>{{$task->task}}</del></span>
                            @else
                            <i class="fas fa-check checkmark"></i><span>{{$task->task}}</span>
                            @endif
                        </td>
                        @if($task->priority == 'low')
                        <td><span class="badge rounded-pill bg-success">{{$task->priority}}</span></td>
                        @elseif($task->priority == 'normal')
                        <td><span class="badge rounded-pill bg-warning">{{$task->priority}}</span></td>
                        @elseif($task->priority == 'high')
                        <td><span class="badge rounded-pill bg-danger">{{$task->priority}}</span></td>
                        @else
                        <td><span class="badge rounded-pill bg-info">{{$task->priority}}</span></td>
                        @endif
                        <td>{{$task->duedate}}</td>
                        <td>{{$task->status}}</td>
                        <td>
                            <div class="progress-label">{{$task->progress}}</div>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$task->progress}};"
                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>{{$task->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
