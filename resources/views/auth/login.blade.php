@extends('auth.auth')

@section('content')
    <div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="ec-brand">
                            <a href="index.php" title="Shop">
                                <!-- <img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" /> -->
                                <h1 class="text-white pt-3">Shop</h1>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        {{-- <h4 class="text-dark mb-5">logIn Your Account</h4> --}}

                        <form action="{{ route('auth.login') }}" method="post">
                            @csrf
                            @method('post')

                            <div class="row">

                                <div class="form-group col-md-12 mb-4">
                                    <input name="email" type="email" class="form-control" id="email"
                                        placeholder="email">
                                        @error('email')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="form-group col-md-12 ">
                                    <input name="password" type="password" class="form-control" id="password"
                                        placeholder="Password">
                                        @error('password')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="d-flex my-2 justify-content-between">
                                        <div class="d-inline-block mr-3">
                                            <div class="control control-checkbox">Remember me
                                                <input name="remember-me" type="checkbox" />
                                                <div class="control-indicator"></div>
                                            </div>
                                        </div>

                                        <p><a class="text-blue" href="{{ route('auth.password-reset') }}">Forgot Password?</a></p>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mb-4">LogIn</button>

                                    <p class="sign-upp">Don't have an account yet ?
                                        <a class="text-blue" href="{{ route('auth.register') }}">Register</a>
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
