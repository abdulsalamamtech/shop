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
                    <p class="breadcrumbs"><span><a href="index.php">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>All Sub Category
                    </p>
                </div>
                <div>
                    <a href="sub-category-add.php">
                        <button type="button" class="btn btn-primary">
                            Add New Sub Category
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="ec-cat-list card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="responsive-data-table" class="table">
                                <thead>
                                    <tr>
                                        <th>Thumb</th>
                                        <th>Name</th>
                                        <th>Main Categories</th>
                                        <th>Product</th>
                                        <th>Total Sell</th>
                                        <th>Status</th>
                                        <th>Trending</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><img class="cat-thumb" src="{{ URL('assets/img/category/clothes.png') }}" alt="product image"/></td>
                                        <td>Winter Wear</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-tag">Clothes</span>
                                            </span>
                                        </td>
                                        <td>28</td>
                                        <td>2161</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge badge-success">Top</span></td>
                                        <td>
                                            <div class="btn-group mb-1">
                                                <a type="button" href="category-detail.php?category&id=1"
                                                    class="btn btn-outline-success">Info</a>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="category-edit.php?category&id=1">Edit</a>
                                                    <a class="dropdown-item" href="deactivate.php?category&id=1">Deactivate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="cat-thumb" src="{{ URL('assets/img/category/glasses.png') }}" alt="product image" /></td>
                                        <td>Sunglasses</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-tag">Glasses</span>
                                            </span>
                                        </td>
                                        <td>82</td>
                                        <td>10061</td>
                                        <td><span class="inactive">Inactive</span></td>
                                        <td><span class="badge bg-primary">Medium</span></td>
                                        <td>
                                            <div class="btn-group mb-1">
                                                <a type="button" href="category-detail.php?category&id=1"
                                                    class="btn btn-outline-success">Info</a>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="category-edit.php?category&id=1">Edit</a>
                                                    <a class="dropdown-item" href="deactivate.php?category&id=1">Deactivate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="cat-thumb" src="{{ URL('assets/img/category/cosmetics.png') }}" alt="product image" /></td>
                                        <td>Skin care kit</td>
                                        <td>
                                            <span class="ec-sub-cat-list">
                                                <span class="ec-sub-cat-tag">Cosmatics</span>
                                            </span>
                                        </td>
                                        <td>18</td>
                                        <td>1061</td>
                                        <td>ACTIVE</td>
                                        <td><span class="badge bg-danger">Low</span></td>
                                        <td>
                                            <div class="btn-group mb-1">
                                                <a type="button" href="category-detail.php?category&id=1"
                                                    class="btn btn-outline-success">Info</a>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="category-edit.php?category&id=1">Edit</a>
                                                    <a class="dropdown-item" href="deactivate.php?category&id=1">Deactivate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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