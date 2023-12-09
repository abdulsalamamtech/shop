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
                    <h1>Sub Categories</h1>
                    <p class="breadcrumbs"><span><a href="/admin">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Add New Sub Category
                    </p>
                </div>
                <div>
                    <a href="sub-category.php">
                        <button type="button" class="btn btn-primary">
                            View All Sub Category
                        </button>
                    </a>
                </div>
            </div>
            <div class="ec-cat-list card card-default mb-24px">
                <div class="card-body">
                    <div class="ec-cat-form">
                        <h4>Edit Sub Category</h4>

                        <form action="{{ route('categories.sub.update', $sub_category->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <!-- SELECT MAIN CATEGORY -->
                            <div class="form-group row">
                                <label for="parent-category" class="col-12 col-form-label">Parent Category</label>
                                <div class="col-12">
                                    <select id="parent-category" name="category_id" class="custom-select">
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}" {{$category->id == $sub_category->id ? 'selected' : ''}}>
                                                {{ $category->name }}
                                            </option>
                                        @empty
                                            <option value="uncategorized">No Category</option>
                                        @endforelse
                                    </select>
                                    @error('category_id')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- CATEGORY NAME -->
                            <div class="form-group row">
                                <label for="text" class="col-12 col-form-label">Category Name</label>
                                <div class="col-12">
                                    <input type="text" id="category-name" name="name" value="{{ old('name')?? $category->name }}"
                                        class="form-control {{ $errors->first('name')? 'form-error' : 'form-success' }}">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- ADD SUB CATEGORY BUTTON -->
                            <div class="row">
                                <div class="col-12">
                                    <button name="add_sub_category" type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <!-- END OF ALL PAGE CONTENT -->
        </div>
        <!-- End Content -->

    </div>
    <!-- End Content Wrapper -->

@endsection
