
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
                        <h1>Categories</h1>
                        <p class="breadcrumbs"><span><a href="{{ route('admin') }}">Home</a></span>
                            <span><i class="mdi mdi-chevron-right"></i></span>All Main Category
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('categories.create') }}">
                            <button type="button" class="btn btn-primary">
                                Add New Main Category
                            </button>
                        </a>
				    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="ec-cat-list card card-default">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="responsive-data-table" class="table">
                                        <thead>
                                            <tr>
                                                <th>Thumb</th>
                                                <th>Name</th>
                                                <th>Sub Categories</th>
                                                <th>Product</th>
                                                <th>Total Sell</th>
                                                <th>Status</th>
                                                <th>Trending</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><img class="cat-thumb" src=" {{ URL('assets/img/category/clothes.png') }}" alt="Product Image" /></td>
                                                <td>Clothes</td>
                                                <td>
                                                    <span class="ec-sub-cat-list">
                                                    <span class="ec-sub-cat-count" title="Total Sub Categories">5</span>
                                                    <span class="ec-sub-cat-tag">T-shirt</span>
                                                    <span class="ec-sub-cat-tag">Shirt</span>
                                                    <span class="ec-sub-cat-tag">Dress</span>
                                                    <span class="ec-sub-cat-tag">Jeans</span>
                                                    <span class="ec-sub-cat-tag">Top</span>
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
                                                <td><img class="cat-thumb" src=" {{ URL('assets/img/category/footwear.png') }}" alt="Product Image" /></td>
                                                <td>Footwear</td>
                                                <td>
                                                    <span class="ec-sub-cat-list">
                                                        <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                        <span class="ec-sub-cat-tag">Sports</span>
                                                        <span class="ec-sub-cat-tag">Casual</span>
                                                        <span class="ec-sub-cat-tag">safety shoes </span>
                                                        <span class="ec-sub-cat-tag">Sandal</span>
                                                    </span>
                                                </td>
                                                <td>68</td>
                                                <td>5161</td>
                                                <td>ACTIVE</td>
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
                                                <td><img class="cat-thumb" src=" {{ URL('assets/img/category/jewelry.png') }}" alt="Product Image" /></td>
                                                <td>Jewelry</td>
                                                <td>
                                                    <span class="ec-sub-cat-list">
                                                        <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                        <span class="ec-sub-cat-tag">necklace</span>
                                                        <span class="ec-sub-cat-tag">chain</span>
                                                        <span class="ec-sub-cat-tag">rings</span>
                                                        <span class="ec-sub-cat-tag">earings</span>
                                                    </span>
                                                </td>
                                                <td>68</td>
                                                <td>5161</td>
                                                <td><span class="inactive">Inactive</span></td>
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
                                                <td><img class="cat-thumb" src=" {{ URL('assets/img/category/perfume.png') }}" alt="Product Image" /></td>
                                                <td>Perfume</td>
                                                <td>
                                                    <span class="ec-sub-cat-list">
                                                        <span class="ec-sub-cat-count" title="Total Sub Categories">4</span>
                                                        <span class="ec-sub-cat-tag">Clothes perfume</span>
                                                        <span class="ec-sub-cat-tag">deodorant </span>
                                                        <span class="ec-sub-cat-tag">Flower fragrance </span>
                                                        <span class="ec-sub-cat-tag">Air Freshener</span>
                                                    </span>
                                                </td>
                                                <td>38</td>
                                                <td>1561</td>
                                                <td>ACTIVE</td>
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
                                                <td><img class="cat-thumb" src=" {{ URL('assets/img/category/cosmetics.png') }}" alt="Product Image" /></td>
                                                <td>Cosmetics</td>
                                                <td>
                                                    <span class="ec-sub-cat-list">
                                                        <span class="ec-sub-cat-count" title="Total Sub Categories">10</span>
                                                        <span class="ec-sub-cat-tag">Makeup kit</span>
                                                        <span class="ec-sub-cat-tag">Hair gel</span>
                                                        <span class="ec-sub-cat-tag">sunscreen</span>
                                                        <span class="ec-sub-cat-tag">facewash</span>
                                                        <span class="ec-sub-cat-tag">Body shop</span>
                                                        <span class="ec-sub-cat-tag">Lipstick</span>
                                                        <span class="ec-sub-cat-tag">eye liner</span>
                                                        <span class="ec-sub-cat-tag">Hair Shampoo</span>
                                                        <span class="ec-sub-cat-tag">Beauty Cream</span>
                                                        <span class="ec-sub-cat-tag">Skin Serum</span>
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
                                            {{-- Main Categories --}}
                                            @forelse ($categories as $category)
                                                <tr>
                                                    <!-- IMAGE -->
                                                    <td><img class="cat-thumb" src=" {{ URL('images/'. $category->image ) }}" alt="{{ $category->name }}" /></td>
                                                    <!-- NAME -->
                                                    <td>{{ $category->name }}</td>
                                                    <!-- SUB CATEGORIES -->
                                                    <td>
                                                        <span class="ec-sub-cat-list">
                                                            <span class="ec-sub-cat-count" title="Total Sub Categories">{{ $category->subCategories()->count() }}</span>
                                                            <span class="ec-sub-cat-tag">shopping bag</span>
                                                            <span class="ec-sub-cat-tag">Gym backpack</span>
                                                            <span class="ec-sub-cat-tag">purse </span>
                                                            <span class="ec-sub-cat-tag">wallet </span>
                                                        </span>
                                                    </td>
                                                    <!-- NO. OF PRODUCTS -->
                                                    <td>18</td>
                                                    <!-- NO. OF SALES -->
                                                    <td>3061</td>
                                                    <!-- STATUS -->
                                                    <td>{{ $category->status ? 'ACTIVE' : 'Inactive' }}</td>
                                                    <!-- TRENDING -->
                                                    <td>
                                                        @if ($category->subCategories()->count() > 10)
                                                            <span class="badge badge-success">Top</span>
                                                        @elseif ($category->subCategories()->count() > 1)
                                                            <span class="badge bg-primary">Medium</span>
                                                        @else
                                                            <span class="badge bg-danger">Low</span>
                                                        @endif
                                                    </td>
                                                    <!-- ACTIONS -->
                                                    <td>
                                                        <div class="btn-group mb-1">
                                                            <a type="button" href="{{ route('categories.show', $category->id ) }}"
                                                                class="btn btn-outline-success">Info</a>
                                                            <button type="button"
                                                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false" data-display="static">
                                                                <span class="sr-only">Info</span>
                                                            </button>

                                                            <div class="dropdown-menu">
                                                                <!-- EDIT -->
                                                                <a class="dropdown-item" href="{{ route('categories.edit', $category->id ) }}">Edit</a>
                                                                <!-- ACTIVATE AND DACTIVATE -->
                                                                @if ($category->status == 1)
                                                                    <form action="{{ route('categories.deactivate', $category->id ) }}" method="post">
                                                                        @csrf
                                                                        @method('POST')
                                                                        <button class="dropdown-item">Deactivate</button>
                                                                    </form>
                                                                @else
                                                                    <form action="{{ route('categories.activate', $category->id ) }}" method="post">
                                                                        @csrf
                                                                        @method('POST')
                                                                        <button class="dropdown-item">Activate</button>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <h3>No categories</h3>
                                            @endforelse
                                        </tbody>
                                    </table>
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
