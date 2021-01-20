@extends('admin.layout.app')

@section('content')
<h2 class="section_title">Banners
  <a class="btn btn-primary float-right" href="{{ '/admin/banners/create' }}" role="button"><i class="fas fa-pen mr-3"></i>Add new Banner</a>
</h2>

<table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">link</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($banners as $banner)
    <tr>
      <td>{{ $banner->title }}</td>
      <td>{{ $banner->link}}</td>
      <td class="actions">
      <a href="/admin/banners/{{$banner->id}}/view"><i class="fas fa-eye view"></i></a>
      <a href="/admin/banners/{{$banner->id}}/edit"><i class="fas fa-pen-square edit"></i></a>
      <form action="/admin/banners/{{$banner->id}}/delete" method="POST" id="delete_form">
      @csrf
      @method('DELETE')
      
      <button class="btn" type="submit"><i class="fas fa-trash-alt delete"></i></button>
      </form>
      </td>
    </tr>
  @endforeach
      
  </tbody>
</table>

@endsection