@extends('layouts.frontmaster')

@section('content')

<x-front-header-title title="Customer Authentication"></x-front-header-title>

<section style="margin: 100px 0px;">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="{{ route('front.customer.auth.register') }}" method="POST">
            @csrf
            <h2>Registration Page</h2>
                <!-- Username input -->
                <div data-mdb-input-init class="form-outline mt-4 mb-2">
                    <input type="text" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Enter a valid username" name="name"/>
                    <label class="form-label mt-2" for="form3Example3">Username</label>
                </div>
                @error('name')
                <span class="text-danger">
                   {{ $message }}
                 </span>
                @enderror

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mt-4 mb-2">
              <input type="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a valid email address" name="email"/>
              <label class="form-label mt-2" for="form3Example3">Email address</label>
            </div>
            @error('email')
            <span class="text-danger">
                {{ $message }}
              </span>
            @enderror

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mt-4 mb-2">
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password" name="password"/>
              <label class="form-label mt-2" for="form3Example4">Password</label>
            </div>
            @error('password')
            <span class="text-danger">
                {{ $message }}
              </span>
            @enderror

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Trams and Conditions!
                </label>
              </div>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="{{ route('front.customer.auth.login') }}"
                  class="link-danger">Login</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>

  </section>

@endsection
