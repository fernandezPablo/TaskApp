@extends('layout')

@section('content')
    <div class="mt-4">
        <h3 class="text-center">List of Tasks</h3>
        <ul class="list-group">
            @foreach ($tasks as $task)
                <li class="list-group-item d-flex">
                        {{ $task->title }}
                    <div class="ml-auto">
                        <form action="{{ route('tasks.destroy',$task->id) }}" method="post">
                            @method('DELETE')
                            @csrf    
                            <button type="button" class="btn btn-success btn-sm mr-1" data-toggle="collapse" data-target="#taskDescription-{{$loop->index}}" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="material-icons text-white">
                                    remove_red_eye
                                </span>
                            </button>
                            <a href="{{ route('tasks.edit',$task->id) }}" class="btn btn-info btn-sm mr-1">
                                <span class="material-icons text-white">
                                    edit
                                </span>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm mr-1">
                                <span class="material-icons">
                                    delete
                                </span>
                            </button>
                        </form>
                    </div>    
                </li>
                <div class="card bg-primary text-white collapse navbar-collapse p-0" id="taskDescription-{{$loop->index}}">
                    <div class="card-body">
                        <small class="card-title">Description for the task:</small>
                        <p class="card-text">
                            {{ $task->description }}
                        </p>
                    </div>
                </div>
            @endforeach
            @if (session('status'))
            <div class="alert alert-success mt-3 text-center">
                {{ session('status') }}
            </div>
            @endif
        </ul>
    </div>
@endsection
