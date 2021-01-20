@extends('admin.layout.app')


@section('content')
<h2 class="section_title">Lessons
  <a class="btn btn-primary float-right" href="{{ '/admin/lessons/create' }}" role="button"><i class="fas fa-pen mr-3"></i>Add new Lesson</a>
</h2>


<div class="card text-center mt-5">
  <div class="card-header">
  {{ $lesson->category->category }}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $lesson->title }}</h5>
    <p class="card-text mb-5">{{ $lesson->description }}</p>
    <a href="/admin/lessons/{{$lesson->id}}/edit" class="btn btn-primary">Edit</a>
  </div>
  <div class="card-footer text-muted">
    Created: {{ $lesson->created_at->diffForHumans() }}
  </div>
</div>

@endsection