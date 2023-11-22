@extends('layouts.main')

@section('main')


<div class="row justify-content-center p-2">
    <div class="col-md-6">

        <main class="form-register w-100 m-auto mt-5">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
              @csrf
              <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('name') 
                  is-invalid 
                @enderror" id="name" name="name" placeholder="name" value="{{ old('name') }}" required>
                <label for="name">name</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>


              <div class="form-floating">
                <input type="text" class="form-control @error('username')
                    is-invalid
                @enderror" id="username" name="username" placeholder="username" value="{{ old('username') }}" required>
                <label for="username">username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>



              <div class="form-floating">
                <input type="email" class="form-control @error('email')
                    is-invalid
                @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                <label for="email">Email address</label>
                <div class="invalid-feedback">
                  @error('email')
                      {{ $message }}
                  @enderror
                </div>
              </div>



              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom @error('password')
                    is-invalid
                @enderror" name="password" id="floatingPassword" placeholder="Password"  required>
                <label for="floatingPassword">Password</label>

                <div class="invalid-feedback">
                  @error('password')
                  {{ $message }}
                      
                  @enderror

                </div>
              </div>




              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
              <small class="d-block text-center mt-3">
                Already Registered? <a href="/login">Login!</a>
              </small>
            </form>
          </main>

    </div>
</div>



@endsection