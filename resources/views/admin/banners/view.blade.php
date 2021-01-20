@extends('admin.layout.app')

@section('content')
<h2 class="section_title">Banners
  <a class="btn btn-primary float-right" href="{{ '/admin/banners/create' }}" role="button"><i class="fas fa-pen mr-3"></i>Add new Banner</a>
</h2>
<p><strong>Banner Title:</strong> {{ $banner->title }}</p>
<p><strong>Banner content:</strong> {{ $banner->content }}</p>
<p><strong>Banner link URL:</strong> {{ $banner->link }}</p>


@endsection