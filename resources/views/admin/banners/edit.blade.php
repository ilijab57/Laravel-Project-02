@extends('admin.layout.app')


@section('content')
<h2 class="section_title">Banners
  <a class="btn btn-primary float-right" href="{{ '/admin/banners/create' }}" role="button"><i class="fas fa-pen mr-3"></i>Add new Banner</a>
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

<form method="POST" action="/admin/banners/{{ $banner->id }}/update" class="edit_create_form">
@csrf
@method('PUT')

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $banner->title }}">
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" name="content" id="content" rows="3">{{ $banner->content }}</textarea>
  </div>

  <div class="form-group">
    <label for="link">Link</label>
    <input type="url" class="form-control" id="link" name="link" value="{{ $banner->link }}">
  </div>

  <button class="btn btn-primary" type="submit">Submit</button>
</form>



@endsection