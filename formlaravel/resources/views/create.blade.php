@extends('layouts.main')
@push('head')
  <title>Add To Do</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Create / Add Todos</div>
        <a href="{{ route('welcome') }}" class="btn btn-primary">Back</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('todo.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>

                <div class="mb-3">
                    <label for="work" class="form-label">Work</label>
                    <input type="text" class="form-control" id="work" name="work">
                    <span class="text-danger">@error('work'){{ $message }}@enderror</span>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date">
                    <span class="text-danger">@error('date'){{ $message }}@enderror</span>
                </div>

                <button type="submit" class="btn btn-primary mt-3 my-2">Add Task</button>
            </form>
        </div>
    </div>
</div>
@endsection
