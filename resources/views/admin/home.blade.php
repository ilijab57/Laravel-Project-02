<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

@extends('admin.layout.app')
@section('content')
<h2 class="section_title">Dashboard</h2>
<div id="dashboard_cards" class="card-deck">
<div class="card text-white bg-success mb-3">
  <div class="card-header">Total number of users</div>
  <div class="card-body">
    <h5 class="card-title">{{ $totalUsers }}</h5>
  </div>
</div>
  <div class="card text-white bg-danger mb-3">
  <div class="card-header">Total number of categories</div>
  <div class="card-body">
    <h5 class="card-title">{{ $totalCategories}}</h5>
  </div>
</div>
  <div class="card text-white bg-warning mb-3">
  <div class="card-header">Total number of lessons</div>
  <div class="card-body">
    <h5 class="card-title">{{ $totalLessons}}</h5>
  </div>
</div>
</div>


<!-- <ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul> -->


@endsection



</body>
</html>