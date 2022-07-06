@extends('layouts/base')

@section('title')
Products from category {{ $category->name }}
@endsection

@section('content')
<h2 class="title is-2">Category {{ $category->name }}</h2>

<div class="block">
  @if ($category->categories_id)

  <div class="columns is-multiline">
    @foreach ($category->products as $product)
    <div class="column is-one-quarter">
      <div class="tile">
        <div class="card">
          <div class="card-header">
            <a class="card-header-title" href="{{ route('product_detail', $product->slug) }}">
              {{ $product->name }}
            </a>
          </div>
          <div class="card-content">
            <p>
              description: {{ $product->description }}
            </p>
          </div>

          <div class="card-footer">
            <p class="card-footer-item">
              Price: {{ $product->price }}
            </p>
          </div>
          {{ $product->currencies_is }}
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @else
  <div class="block">
    <p>There is no products on this category, maybe you should check more specific category?</p>

  </div>
  @foreach ($category->child_categories as $category)
  <div class="block">
    <a class="is-link" href="{{ route('category_detail', $category->slug) }}">{{ $category->name }}</a>
  </div>
  @endforeach
  @endif
</div>
@endsection
