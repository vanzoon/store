@extends('layouts/base')

@section('title')
Love u
@endsection

@section('content')
<div class="columns is-multiline">
  @foreach ($categories as $category)
  <div class="column is-one-third">
    <div class="card">
      <div class="card-header">
        <a class="card-header-title" href="{{ route('category_detail', $category) }}">
          {{$category->name}}
        </a>
      </div>
    </div>
  </div>
  @endforeach
</div>

<div class="columns is-multiline">
  @foreach ($products as $product)
  <div class="column is-one-third">
    <div class="card">
      <div class="card-image">
        <figure class="if-4by3 image">
          <img src="/images/placeholders/1280x960.png" alt="meow">
        </figure>
      </div>
      <div class="card-header">
        <a class="card-header-title" href="{{ route('product_detail', $product)}}">
          {{$product->name}}
        </a>
      </div>
      <div class="card-content">
        {{$product->description}}
      </div>

    </div>
  </div>
  @endforeach
</div>

@endsection
