@extends('layouts/base')

@section('title')
{{ $product->name }}- Product update
@endsection

@section('content')
<h2 class="title is-2">
  {{ $product->name }}
</h2>

<div class="block">
  <form action="{{ route('product.update') }}">
    @csrf
    @method("PATCH")
  </form>
</div>
@endsection
