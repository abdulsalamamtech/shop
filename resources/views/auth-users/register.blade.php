@extends('admin.auth.auth')

@section('content')
    <div class="container d-flex align-items-center justify-content-center form-height pt-24px pb-24px">
        <div class="row justify-content-center">
        <div class="col-lg-4 col-md-10">
            <div class="card">
            <div class="card-header bg-primary">
                <div class="ec-brand">
                <a href="index.html" title="Shop">
                    <!-- <img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" /> -->
                    <h1 class="text-white pt-3">Shop</h1>
                </a>
                </div>
            </div>
            <div class="card-body p-5">
                {{-- <h4 class="text-dark mb-5">Sign Up</h4> --}}

                <form action="{{ route('users.create') }}">
                    <div class="row">
                        <div class="form-group col-md-12 mb-4">
                        <input name="username" type="text" class="form-control" id="username" placeholder="username">
                        </div>

                        <div class="form-group col-md-12 mb-4">
                        <input name="email" type="email" class="form-control" id="email" placeholder="email">
                        </div>

                        <div class="form-group col-md-12 ">
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <div class="form-group col-md-12 ">
                        <input name="confirm-password" type="password" class="form-control" id="cpassword" placeholder="Confirm Password">
                        </div>

                        <div class="col-md-12">
                        <div class="d-inline-block mr-3">
                            <div class="control control-checkbox">
                            <input name="terms-and-conditions" type="checkbox" />
                            <div class="control-indicator"></div>
                                I Agree the terms and conditions
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>

                        <p class="sign-upp">Already have an account?
                            <a class="text-blue" href="{{ route('users.login') }}">LogIn</a>
                        </p>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
