@extends('admin.layout.app')


@section('content')
<h2 class="section_title">List of users</h2>
<table id="users_table" class="table">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <td>{{ $user->email }}</td>
      @if( empty($user->category->category))
      <td>No Category selected</td>
      @else
      <td>{{ $user->category->category }}</td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>

{{ $users->links() }}

@endsection