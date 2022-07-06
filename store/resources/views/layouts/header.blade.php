<nav class="navbar is-light" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/store">
      <img src="/images/logo.jpg">
    </a>
  </div>

  <div class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="{{ route("store_homepage") }}">
        Store
      </a>
      <a class="navbar-item" href="{{ route('category_list') }}">
        Categories
      </a>
    </div>
  </div>
  </div>

  <div class="navbar-end">
    <div class="navbar-item">

      @auth
      <div class="navbar-item">
        <div>
          Hello, {{ auth()->user()->name }} </div>
      </div>
      <div class="buttons">
        <form method="post" action="{{ route("logout") }}">
          @csrf
          <button class="button is-light" type="submit">
            Log out
            </a>
        </form>
      </div>
      @endauth

      @guest
      <div class="buttons">
        <a class="button is-primary" href="{{ route("register") }}">
          <strong>Sign up</strong>
        </a>
        <a class="button is-light" href="{{ route("login") }}">
          Log in
        </a>
      </div>
      @endguest
    </div>
  </div>
  </div>
</nav>
