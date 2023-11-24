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

          @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sorry!!</strong> {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>         
          @endif

            <h1 class="h3 mb-3 fw-normal">Please login</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                <label for="email">Email address</label>

                <div class="invalid-feedback">
                    @error('email') 
                      {{ $message }}
                    @enderror
                </div>

              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password"  required>
                <label for="password">Password</label>
                <div class="invalid-feedback">
                  @error('password') 
                    {{ $message }}
                  @enderror
              </div>
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