@extends('layouts/base')

@section('title')
Categories
@endsection

@section('content')
<h2 class="title is-2">categories</h2>
@if ($categories->count())
<div class="columns is-multiline">
  @foreach ($categories as $category)
  <div class="column is-one-quarter">
    <div class="card">
      <div class="card-header">
        <a class="card-header-title is-link" href="{{ route('category_detail', $category->slug) }}">{{ $category->name }}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

@else
<p>there is no categories</p>
@endif
@endsection
