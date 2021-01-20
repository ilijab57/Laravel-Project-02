@extends('layouts.app')


@section('categoryInModalForm')
<input type="hidden" name="category" value="{{ $category->id }}">
@endsection
@section('category')
<input type="hidden" name="category" value="{{ $category->id }}">
@endsection

@section('content')

<div class="col-md-8">
@for($i = count($lessons); $i >=1 ; $i--) 
<div class="lesson mb-5">
    <span class="lesson_no">#{{$i}}</span>
    <span class="lesson_title ml-3">{{$lessons[$i-1]->title}}</span>
    <span class="alert alert-warning lesson_date">{{date('F j, Y',strtotime($lessons[$i-1]->created_at)) }}</span>
    <p class="mt-3">{{ $lessons[$i-1]->description }}</p>
</div>
@endfor
</div>


<div class="col-md-4">
@foreach($banners as $banner)
<div class="card banner mb-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $banner->title }}</h5>
    <p class="card-text">{{ $banner->content }}</p>
        <a class="btn btn-light btn-block" href="{{ $banner->link }}" role="button"><span>Повеќе</span><i class="fas fa-arrow-right"></i></a>
  </div>
</div>
@endforeach
</div>


@endsection