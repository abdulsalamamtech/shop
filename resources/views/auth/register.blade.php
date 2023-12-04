@extends('auth.auth')

@section('content')
    <div class="container d-flex align-items-center justify-content-center form-height pt-24px pb-24px">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="ec-brand">
                            <a href="#" title="Shop">
                                <!-- <img class="ec-brand-icon" src="assets/img/logo/logo-login.png" alt="" /> -->
                                <h1 class="text-white pt-3">Shop</h1>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        {{-- <h4 class="text-dark mb-5">Sign Up</h4> --}}



                        <form action="{{ route('auth.register') }}" method="post">
                            @csrf
                            @method('post')

                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input name="name" type="text" class="form-control {{ $errors->first('name')? 'form-error' : 'form-success' }}"
                                        id="username" placeholder="username" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input name="email" type="email" class="form-control {{ $errors->first('name')? 'form-error' : 'form-success' }}"
                                        id="email" placeholder="email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="form-group col-md-12 ">
                                    <input name="password" type="password" class="form-control {{ $errors->first('password')? 'form-error' : 'form-success' }}"
                                        id="password" placeholder="Password">
                                        @error('password')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="form-group col-md-12 ">
                                    <input name="password_confirmation" type="password" class="form-control {{ $errors->first('password_confirmation')? 'form-error' : 'form-success' }}"
                                        id="cpassword" placeholder="Confirm Password">
                                        @error('password_confirmation')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="d-inline-block mr-3">
                                            <input name="terms-and-conditions" type="checkbox" id="terms-and-conditions" />
                                            <label class="ml-2" for="terms-and-conditions">
                                                I Agree the terms and conditions
                                                <div>
                                                    @error('terms-and-conditions')
                                                        <span class="error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </label>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>

                                    <p class="sign-upp pb-2">Already have an account?
                                        <a class="text-blue" href="{{ route('auth.login') }}">LogIn</a>
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
