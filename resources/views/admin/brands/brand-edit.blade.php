<!-- Extends this page to master page -->
@extends('layouts.master')

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">

        <!-- START OF CONTENT -->
        <div class="content">
            <!-- ALL PAGE CONTENT -->
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Main Brands</h1>
                    <p class="breadcrumbs"><span><a href="{{ url('admin') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Edit Main Brand
                    </p>
                </div>
                <div>
                    <a href="{{ route('brands.index') }}">
                        <button type="button" class="btn btn-primary">
                            View All Main Brand
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <div class="ec-cat-form">
                                <h4>Edit brand</h4>

                                <form action="{{ route('brands.update', $brand->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <!-- brand NAME -->
                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">brand Name</label>
                                        <div class="col-12">
                                            <input type="text" id="brand-name" name="name" value="{{ old('name')?? $brand->name }}"
                                                class="form-control {{ $errors->first('name')? 'form-error' : 'form-success' }}">
                                            @error('name')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- brand IMAGE -->
                                    <div class="form-group row">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                      <img src="{{URL('images/'. $brand->image ?? old('image')) }}" alt="brand image {{ $brand->name }}"
                                                          class="mx-auto d-block m-2"
                                                          height="200px" width="200px">
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-12 col-form-label">brand Image</label>
                                        <div class="col-12">
                                            <input type="file" id="brand-image" name="image" value="{{ old('image') }}"
                                            class="form-control {{ $errors->first('image')? 'form-error' : 'form-success' }}">
                                            @error('image')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- ADD brand BUTTON -->
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save brand</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END OF ALL PAGE CONTENT -->
        </div>
        <!-- End Content -->

    </div>
    <!-- End Content Wrapper -->
@endsection
