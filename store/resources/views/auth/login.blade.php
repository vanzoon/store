@extends('layouts/base')

@section('title')
Login
@endsection

@section('content')
<div class="card">
  <div class="card-content">

    @if (session("status"))
    <div class="message is-danger">{{ session("status") }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf


      <div class="field">
        <div class="control">
          <input type="text" class="input @error('username') is-danger @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="Username">
        </div>
      </div>

      <div class="field">
        <div class="control">
          <input type="password" class="input @error('password') is-danger @enderror" id="password" name="password" placeholder="Password">
        </div>
      </div>

      <div class="field">
        <label class="control">
          <input type="checkbox" name="remember">
          Remember me
        </label>
      </div>

      @if($errors->any())
      <div class="message is-danger">
        <div class="message-body">
          <p>Please, fix issues</p>
        </div>
      </div>
      @endif

      <div class="field">
        <button class="button is-primary" type="submit"> Log me in!</button>
      </div>

    </form>

  </div>
</div>
@endsection
