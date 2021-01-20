@extends('admin.layout.app')

@section('content')
<h2 class="section_title">Categories
  <a class="btn btn-primary float-right" href="{{ '/admin/categories/create' }}" role="button"><i class="fas fa-pen mr-3"></i>Add new Category</a>
</h2>

<table id="categories_table" class="table">
  <thead>
    <tr>
      <th scope="col">Category name</th>
      <th scope="col">Image url</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $category)
    <tr>
      <td>{{ $category->category }}</td>
      <td><img src="{{ asset('storage/images/' . $category->image_url) }}" class="category_img_table"></td>
      <td>     
      {{ implode(' ',array_slice(explode(' ',$category->description),0,5)) ."..."}}
      </td>
      <td class="actions">
      <a href="/admin/categories/{{$category->id}}/view"><i class="fas fa-eye view"></i></a>
      <a href="/admin/categories/{{$category->id}}/edit"><i class="fas fa-pen-square edit"></i></a>

    </td>
    </tr>
  @endforeach
      
  </tbody>
</table>



@endsection