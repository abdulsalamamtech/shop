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
                        <h4>Add Sub Category</h4>

                        <form>

                            <!-- SELECT MAIN CATEGORY -->
                            <div class="form-group row">
                                <label for="parent-category" class="col-12 col-form-label">Parent Category</label> 
                                <div class="col-12">
                                    <select id="parent-category" name="parent-category" class="custom-select">
                                    <option value="">Clothes</option>
                                    <option value="uncategorized">Footwear</option>
                                    <option value="new category">Jewellry</option>
                                    <option value="new category">Perfume</option>
                                    <option value="new category">Cosmatics</option>
                                    <option value="new category">Glasses</option>
                                    <option value="new category">Bags</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- CATEGORY NAME -->
                            <div class="form-group row">
                                <label for="sub-category-name" class="col-12 col-form-label">Sub Category Name</label> 
                                <div class="col-12">
                                    <input id="sub-category-name" name="sub_category_name" class="form-control here slug-title" type="text">
                                </div>
                            </div>

                            <!-- ADD SUB CATEGORY BUTTON -->
                            <div class="row">
                                <div class="col-12">
                                    <button name="add_sub_category" type="submit" class="btn btn-primary">Add Sub Category</button>
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