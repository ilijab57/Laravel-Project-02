@extends('admin.layout.app')


@section('content')
<h2 class="section_title">Lessons
  <a class="btn btn-success float-right mr-5" href="{{ '/admin/lessons' }}" role="button"><i class="fas fa-book-open mr-3"></i>List of Lessons</a>
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

<form method="POST" action="/admin/lessons/store" class="edit_create_form">
@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="10">{{ old('description') }}</textarea>
  </div>

  <div class="form-group">
    <label for="category">Category:</label>
    <select class="form-control" id="category" name="category">
    @foreach($categories as $category)
      <option value="{{ $category->id }}">{{ $category->category }}</option>
    @endforeach
    </select>
  </div>

  <button class="btn btn-primary" type="submit">Submit</button>
</form>



@endsection