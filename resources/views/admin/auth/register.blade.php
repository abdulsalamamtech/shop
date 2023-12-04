@extends('admin.auth.auth')

@section('content')
    <div class="container d-flex align-items-center justify-content-center form-height pt-24px pb-24px">
        <div class="row justify-content-center">
        <div class="col-lg-4 col-md-10">
            <div class="card">
            <div class="card-header bg-primary">
                <div class="ec-brand">
                <a href="index.html" title="Ekka">
                    <!-- <img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" /> -->
                                        <h1 class="text-white pt-3">ECommerce</h1>
                </a>
                </div>
            </div>
            <div class="card-body p-5">
                <h4 class="text-dark mb-5">Sign Up</h4>

                <form action="https://maraviyainfotech.com/index.html">
                <div class="row">
                    <div class="form-group col-md-12 mb-4">
                    <input type="text" class="form-control" id="username" placeholder="username">
                    </div>

                    <div class="form-group col-md-12 mb-4">
                    <input type="email" class="form-control" id="email" placeholder="email">
                    </div>

                    <div class="form-group col-md-12 ">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>

                    <div class="form-group col-md-12 ">
                    <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password">
                    </div>

                    <div class="col-md-12">
                    <div class="d-inline-block mr-3">
                        <div class="control control-checkbox">
                        <input type="checkbox" />
                        <div class="control-indicator"></div>
                        I Agree the terms and conditions
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>

                    <p class="sign-upp">Already have an account?
                        <a class="text-blue" href="sign-in.php">Sign in</a>
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