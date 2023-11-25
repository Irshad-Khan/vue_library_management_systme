<title> Registration Page-Online Library Management System</title>

@extends('layouts.authentication')

@section('content')

                   <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>
                  @if(session('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
        {{session('success')}}
       <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
         @endif

                  <form class="row g-3 needs-validation" novalidate Method="POST" action="{{route('authentication.registration')}}">
                    @csrf

                    <div class="col-12">
                      <label for="yourName" class="form-label">User Name</label>
                      <input type="text" name="user_name" class="form-control" id="user_name" required>
                      <div class="invalid-feedback">Please, enter User name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Your First Name</label>
                      <input type="text" name="first_name" class="form-control" id="first_name" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Last Name</label>
                      <input type="text" name="last_name" class="form-control" id="last_name" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="email" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{route('login')}}">Log in</a></p>
                    </div>
                  </form>

                  @endsection