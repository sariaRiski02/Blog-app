@extends('layouts.main')


@section('main')

<div class="row justify-content-center p-2">
    <div class="col-md-5">

        <main class="form-signin w-100 m-auto mt-5">

          @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Horeee!!</strong> {{ session('success') }} Please Login!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>         
          @endif

            <h1 class="h3 mb-3 fw-normal">Please login</h1>
            <form>
          
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          
              <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
              <small class="d-block text-center mt-3">
                Not Registered? <a href="/register">Register Now!</a>
              </small>
            </form>
          </main>

    </div>
</div>

    
@endsection