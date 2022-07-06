@extends('layouts/base')

@section('title')
Registration
@endsection

@section('content')
<div class="card">
  <div class="card-content">
    <p class="content">meow</p>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="field">
        <label class="label">Name:</label>
        <div class="control">
          <input type="text" class="input @error('name') is-danger @enderror" id="name" name="name" value="{{ old('name') }}">
        </div>
      </div>

      <div class="field">
        <label class="label">Username:</label>
        <div class="control">
          <input type="text" class="input @error('username') is-danger @enderror" id="username" name="username" value="{{ old('username') }}">
        </div>
      </div>

      <div class="field">
        <label class="label">Email:</label>
        <div class="control">
          <input type="email" class="input @error('email') is-danger @enderror" id="email" name="email" value="{{ old('email') }}">
        </div>
      </div>

      <div class="field">
        <label class="label">Password:</label>
        <div class="control">
          <input type="password" class="input @error('password') is-danger @enderror" id="password" name="password">
        </div>
      </div>

      <div class="field">
        <label class="label">Password confirmation</label>
        <div class="control">
          <input type="password" class="input" name="password_confirmation">
        </div>
      </div>

      @if($errors->any())
      <div class="message is-danger">
        <div class="message-body">
          <p>Please, fix issues</p>
        </div>
      </div>
      @endif

      <div class="field">
        <button class="button is-primary" type="submit">register me!</button>
      </div>

    </form>

  </div>
</div>
@endsection
