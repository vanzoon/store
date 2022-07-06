@extends('layouts/base')

@section('title')
{{ $product->name }}- Product detail
@endsection

@section('content')
<h2 class="title is-2">
  {{ $product->name }}
</h2>
<div class="block">
  <div class="card">
    <div class="card-header">
      <p class="card-header-title">
        {{ $product->name }}
      </p>
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
      @can("update", $product)
      <form class="card-footer-item" action="{{ route('product_delete', $product->slug) }}">
        @csrf
        @method('PATCH')
        <a class="is-link is-info">Update info</a>
      </form>
      @endcan
      @can("delete", $product)
      <form class="card-footer-item" action="{{ route('product_delete', $product->slug) }}">
        @csrf
        @method('DELETE')
        <a class="is-link is-danger">Delete</a>
      </form>
      @endcan
    </div>
    {{ $product->currencies_is }}
  </div>
</div>
@endsection
