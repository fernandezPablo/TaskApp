@extends('layout')

@section('content')
    <h3 class="text-center mt-4">New Task</h3>
    <div class="card bg-secondary text-white p-3 mt-4">
    <form action="{{ route('tasks.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Title for the task" class="form-control">    
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" placeholder="A brief description for the task" class="form-control">    
            </div>
            <button type="submit" class="btn btn-info btn-block text-white">Create Task</button>
        </form>
    </div>
    @if (session('status'))
        <div class="alert alert-success mt-3 text-center">
            The task was successfully created!
        </div>
    @endif    
@endsection