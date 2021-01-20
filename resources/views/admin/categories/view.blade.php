@extends('admin.layout.app')

@section('content')
<h2 class="section_title">Categories
  <a class="btn btn-primary float-right" href="{{ '/admin/categories/create' }}" role="button"><i class="fas fa-pen mr-3"></i>Add new Category</a>
</h2>

<div class="card mb-3 mt-5" style="width: 18rem;">
  <img src="{{ asset('storage/images/' . $category->image_url) }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $category->category}}</h5>
    <p class="card-text">{{ $category->description }}</p>
    <a href="/admin/categories/{{$category->id}}/edit" class="btn btn-block btn-primary">Edit</a>
  </div>
</div>


@endsection