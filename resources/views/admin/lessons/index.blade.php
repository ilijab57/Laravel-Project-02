@extends('admin.layout.app')


@section('content')
<h2 class="section_title">Lessons
  <a class="btn btn-primary float-right" href="{{ '/admin/lessons/create' }}" role="button"><i class="fas fa-pen mr-3"></i>Add new Lesson</a>
</h2>

<table id="lessons_table" class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($lessons as $lesson)
    <tr>
      <td>{{ $lesson->title }}</td>
      <td>{{ $lesson->category->category}}</td>
      <td class="actions">
      <a href="/admin/lessons/{{$lesson->id}}/view"><i class="fas fa-eye view"></i></a>
      <a href="/admin/lessons/{{$lesson->id}}/edit"><i class="fas fa-pen-square edit"></i></a>
      <form action="/admin/lessons/{{$lesson->id}}/delete" method="POST" id="delete_form">
      @csrf
      @method('DELETE')
      
      <button class="btn" type="submit"><i class="fas fa-trash-alt delete"></i></button>
      </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

{{ $lessons->links() }}  


@endsection