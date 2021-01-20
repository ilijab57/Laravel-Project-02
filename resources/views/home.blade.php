@extends('layouts.app')

@section('categoryInModalForm')
<div class="form-group">
          <select class="custom-select ml-5 mt-5 pl-0" name="category">
            <option selected value="">Избери Категорија</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category}}</option>
            @endforeach
          </select>
        </div>
@endsection
@section('content')



    <div class="col-12 categories_cards">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        @foreach($categories as $category)
        <div class="col mb-4 card_height">
            <div class="card h-100">
              <img src="{{ asset('storage/images/' . $category->image_url) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$category->category}}</h5>
                <p class="card-text">
                {{$category->description}}
                </p>
              </div>
              <div class="card-footer">
                <a href="/lessons/category/{{$category->id}}" class="stretched-link category_lessons_link">
                {{ $category->lessons->count() }} лекции</a>
              </div>
            </div>
          </div>
        @endforeach



      </div>
      </div>


@endsection
