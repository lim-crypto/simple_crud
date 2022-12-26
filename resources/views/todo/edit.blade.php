@extends('todo.layout')
@section('content')
    <div class="container mx-auto">
        <div class="card mx-auto" style="width: 18rem;">
            <div class="card-header">
                <i class="fa-solid fa-clipboard-list pr-2 "></i> Update To-do
            </div>
            @include('todo.alert')
            <form method="POST" action="{{ route('todo.update', $todo->id) }}" class="p-3">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input value="{{ $todo->title }}" type="text" name="title" id="title"
                        placeholder="Title"class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description">{{ $todo->description }}</textarea>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <a href="{{ route('todo.index') }}" class="btn btn-light">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
