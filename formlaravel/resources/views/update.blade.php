@extends('layouts.main')
@push('head')
  <title>update Todo</title>
@endpush


@section('main-section')

<div class="container">
    <div class=" d-flex justify-content-between align-items-center my-5">
        <div class="h2">UpdateTodos</div>
        <a href="{{route('welcome')}}" class="btn btn-primary">Back</a>
    </div>

<div class="card">
    <div class="card-body">
        <form action="{{route('todo.updateData', $todo->id)}}" method="post">
@csrf

            <label for="" class="form-label mt-4"> Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$todo->name}}">
            <label for="" class="form-label mt-4" > Work</label>
            <input type="text" class="form-control" id="work" name="work" value="{{$todo->work}}">
            <label for="" class="form-label mt-4"> Due Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{$todo->date}}">
            <input type="number" name="id" value="{{$todo->id}}" hidden>
            <button class="btn-primary btn-lg mt-5">update Todo</button>

    </div>
</div>

</div>


@endsection



