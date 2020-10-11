@extends('layout')

@section('content')
    <h3 class="text-center mt-4">Edit Task</h3>
    <div class="card bg-secondary text-white p-3 mt-4">
    <form action="{{ route('tasks.update',$task->id) }}" method="post">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title for the task" class="form-control" value="{{ $task->title }}">    
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" placeholder="A brief description for the task" class="form-control" value="{{ $task->description }}">    
            </div>
            <button type="submit" class="btn btn-info btn-block text-white">Update Task</button>
        </form>
    </div>
@endsection