
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
                    <h1>Brand</h1>
                    <p class="breadcrumbs"><span><a href="/admin">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Add Brand</p>
                </div>
                <div>
                    <a href="brand.php">
                        <button type="button" class="btn btn-primary">
                            View All Brand
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <div class="ec-cat-form">
                                <h4>Add New Brand</h4>

                                <form>
                                    <!-- BRAND NAME -->
                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">brand Name</label> 
                                        <div class="col-12">
                                            <input id="brand-name" name="brand_name" class="form-control here slug-title" type="text">
                                        </div>
                                    </div>
                                    <!-- BRAND IMAGE -->
                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">brand Image</label> 
                                        <div class="col-12">
                                            <input type="file" id="brand-image" name="brand_image" class="form-control">
                                        </div>
                                    </div> 
                                    <!-- ADD BRAND BUTTON -->
                                    <div class="row">
                                        <div class="col-12">
                                            <button name="add_brand" type="submit" class="btn btn-primary">Add brand</button>
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