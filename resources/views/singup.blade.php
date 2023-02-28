@extends('layouts.app')

@section('titel-block') Singup @endsection

@section('mein_content')

<div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <h2 class="fw-bold mb-0">Sign up for free</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      @if ($errors->any())
        <div class="alert alert-danger"> 
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="modal-body p-5 pt-0">
        <form method="POST" action="/singup/check" class="">
          @csrf
          <div class="form-floating mb-3">
            <input type="name" name="name" class="form-control rounded-4" id="floatingInputName" placeholder="Name">
            <label for="floatingInputName">Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control rounded-4" id="floatingInput" placeholder="email@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
          <hr class="my-4">

          <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
          <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
            Sign up with Twitter
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
            Sign up with Facebook
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-4" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"></use></svg>
            Sign up with GitHub
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection