@section('hat')
<header class="p-3 mb-3 border-bottom">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 text-primary">Home</a></li>
        <li><a href="/contact" class="nav-link px-2 text-dark">Contact</a></li>
        <li><a href="/about" class="nav-link px-2 text-dark">About</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>

      <div class="text-end">
        <button type="button" name="login-button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" name="singup-button" class="btn btn-primary">Sign-up</button>

        @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
        @endif
        {{ __('You are logged in!') }}

      </div>
    </div>
</header>