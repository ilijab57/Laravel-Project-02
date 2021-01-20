@extends('admin.layout.app')


@section('content')
<h2 class="section_title">Banners
  <a class="btn btn-success float-right mr-5" href="{{ '/admin/banners' }}" role="button"><i class="fas fa-book-open mr-3"></i>List of Banners</a>
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

<form method="POST" action="/admin/banners/store" class="edit_create_form">
@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" name="content" id="content" rows="3">{{ old('content') }}</textarea>
  </div>

  <div class="form-group">
    <label for="link">Link</label>
    <input type="url" class="form-control" id="link" name="link" value="{{ old('link') }}">
  </div>


  <button class="btn btn-primary" type="submit">Submit</button>
</form>



@endsection