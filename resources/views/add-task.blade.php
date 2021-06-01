@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <form action="/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="task">Task</label>
                <input type="text" class="form-control" id="task" name="task">
            </div>
            <div class="form-group">
                <label for="priority">priority</label>
                <textarea class="form-control" id="priority" name="priority" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="duedate">duedate</label>
                <textarea class="form-control" id="duedate" name="duedate" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="status">status</label>
                <textarea class="form-control" id="status" name="status" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="progress">progress</label>
                <textarea class="form-control" id="progress" name="progress" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </form>

        </div>
    </div>
</div>
@endsection
