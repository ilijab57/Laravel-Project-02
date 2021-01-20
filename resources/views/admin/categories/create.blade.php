@extends('admin.layout.app')


@section('content')
<h2 class="section_title">Categories
  <a class="btn btn-success float-right mr-5" href="{{ '/admin/categories' }}" role="button"><i class="fas fa-project-diagram mr-3"></i>List of categories</a>
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

<form method="POST" action="/admin/categories/store" enctype='multipart/form-data' class="edit_create_form">
@csrf

  <div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
  </div>


  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>


  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</form>



@endsection