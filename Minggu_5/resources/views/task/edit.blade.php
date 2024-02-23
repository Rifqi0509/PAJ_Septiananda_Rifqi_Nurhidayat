@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Task</h1>
        <form method="POST" action="{{ url('/task/' . $task->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $task->name }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control">{{ $task->description }}</textarea>
            </div>
                
            <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
        <a href="{{ url('/task/' . $task->id)  }}">Back To Task</a>
    </div>
@endsection
