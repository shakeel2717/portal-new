@extends('layouts.auth')
@section('title','Sign Up')
@section('form')
<a href="{{ asset('dashboard/index.html') }}" class="navbar-brand d-flex align-items-center mb-3">
    <img src="{{ asset('assets/brand/Logo-color.svg') }}" alt="">
</a>
<h2 class="mb-2 text-center">@yield('title')</h2>
<p class="text-center">Create your {{ env('APP_NAME') }} account.</p>
<form accept="{{ route('register') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <x-input name="name" type="text" placeholder="Your Full Name" />
        </div>
        <div class="col-lg-12">
            <x-input name="email" type="email" placeholder="Enter your Email" />
        </div>
        <div class="col-lg-12">
            <x-input name="password" type="password" placeholder="Type your Password" />
        </div>
        <div class="col-lg-12">
            <x-input name="password_confirmation" type="password" placeholder="Confirm your Password" />
        </div>
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="customCheck1">
                <label class="form-check-label" for="customCheck1">I agree to the Terms</label>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Create Account</button>
    </div>
    <p class="text-center my-3">or sign up with other accounts?</p>
    <div class="d-flex justify-content-center">
        <ul class="list-group list-group-horizontal list-group-flush">
            <li class="list-group-item border-0 pb-0">
                <a href="#"><img src="{{ asset('assets/images/brands/fb.svg') }}" alt="fb"></a>
            </li>
            <li class="list-group-item border-0 pb-0">
                <a href="#"><img src="{{ asset('assets/images/brands/gm.svg') }}" alt="gm"></a>
            </li>
        </ul>
    </div>
    <p class="mt-3 text-center">
        Already have an account? <a href="{{ route('register') }}" class="text-underline">Click
            here to sign in.</a>
    </p>
</form>
@endsection