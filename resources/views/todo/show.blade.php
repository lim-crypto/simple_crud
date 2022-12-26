@extends('todo.layout')
@section('content')
    <div class="container mx-auto">
        <div class="card mx-auto" style="width: 18rem;">
            <div class="card-header">
                <i class="fa-solid fa-clipboard-list pr-2 "></i> To-do list
            </div>
            @include('todo.alert')
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex  justify-content-between ">
                    <form action="{{ route('todo.complete', $todo->id) }}" method="POST">
                        @csrf
                        @method('patch')

                        @if ($todo->completed)
                            <button type="submit" class="btn p-0 pr-2  bg-transparent  text-success"><i
                                    class="fa-solid fa-circle-check"></i></button>
                        @else
                            <button type="submit" class="btn p-0 pr-2 bg-transparent">
                                <i class="fa-regular fa-circle-check"></i></button>
                        @endif
                    </form>
                    <div class=" text-truncate text-break">
                        @if ($todo->completed)
                            <del>
                                <span>
                                    {{ $todo->title }}
                                </span>
                            </del>
                        @else
                            <span>
                                {{ $todo->title }}
                            </span>
                        @endif
                    </div>
                    <div class=" d-flex ">
                        <a href="{{ route('todo.edit', $todo->id) }}" class="btn py-0 bg-transparent "><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ route('todo.destroy', $todo->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn p-0 pr-2 bg-transparent text-danger"><i
                                    class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </li>
            </ul>
            <div class="card-body">
                <p class="card-text">{{ $todo->description }}</p>
            </div>

            <div class="card-footer text-muted">
                <a href="{{ route('todo.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
