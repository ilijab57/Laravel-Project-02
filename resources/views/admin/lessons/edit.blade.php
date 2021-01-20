@extends('admin.layout.app')


@section('content')
<h2 class="section_title">Lessons
  <a class="btn btn-primary float-right" href="{{ '/admin/lessons/create' }}" role="button"><i class="fas fa-pen mr-3"></i>Add new Lesson</a>
</h2>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form method="POST" action="/admin/lessons/{{ $lesson->id }}/update" class="edit_create_form">
@csrf
@method('PUT')
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $lesson->title }}">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="3">{{ $lesson->description}}</textarea>
  </div>

  <div class="form-group">
    <label for="category">Category:</label>
    <select class="form-control" id="category" name="category">
    @foreach($categories as $category)
      <option 
      @if ($lesson->category_id == $category->id)
      {{ 'selected' }}
      @endif
      value="{{ $category->id }}">{{ $category->category }}</option>
    @endforeach
    </select>
  </div>

  <button class="btn btn-primary" type="submit">Submit</button>
</form>



@endsection