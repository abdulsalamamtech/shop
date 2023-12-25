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
                    <h1>Main Categories</h1>
                    <p class="breadcrumbs"><span><a href="{{ url('admin') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Add New Main Category
                    </p>
                </div>
                <div>
                    <a href="{{ route('categories.index') }}">
                        <button type="button" class="btn btn-primary">
                            View All Main Category
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <div class="ec-cat-form">
                                <h4>Add New Category</h4>

                                <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!-- CATEGORY NAME -->
                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Category Name</label>
                                        <div class="col-12">
                                            <input type="text" id="category-name" name="name" value="{{ old('name') }}"
                                                class="form-control {{ $errors->first('name')? 'form-error' : 'form-success' }}">
                                            @error('name')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- CATEGORY IMAGE -->
                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Category Image</label>
                                        <div class="col-12">

                                            <input type="file" id="category-image" name="image" value="{{ old('image') }}"
                                            class="form-control {{ $errors->first('image')? 'form-error' : 'form-success' }}">
                                            @error('image')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- ADD CATEGORY BUTTON -->
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Add Category</button>
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
