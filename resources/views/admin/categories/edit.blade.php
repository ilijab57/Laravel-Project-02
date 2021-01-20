@extends('admin.layout.app')


@section('content')
<h2 class="section_title">Categories
  <a class="btn btn-primary float-right" href="{{ '/admin/categories/create' }}" role="button"><i class="fas fa-pen mr-3"></i>Add new Category</a>
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

<form method="POST" action="/admin/categories/{{ $category->id }}/update" enctype="multipart/form-data" class="edit_create_form">
@csrf
@method('PUT')

<div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$category->category}}">
  </div>


  <div class="form-group">
    <label for="image">Image</label>
    @if($category->image_url)
        <ul>
            <li>{{ $category->image_url}}</li>
        </ul>
    @endif
    <input type="file" class="form-control-file" id="image" name="image">
  </div>


  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="3">{{ $category->description }}</textarea>
  </div>

  <button class="btn btn-primary" type="submit">Submit</button>
</form>



@endsection