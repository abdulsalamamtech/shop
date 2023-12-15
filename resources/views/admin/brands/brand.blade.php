
<!-- Extends this page to master page -->
@extends('layouts.master')

@section('content')

    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">

        <!-- START OF CONTENT -->
        <div class="content">
            <!-- ALL PAGE CONTENT -->
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
				<div>
					<h1>Brand</h1>
					<p class="breadcrumbs"><span><a href="{{ route('admin') }}">Home</a></span>
						<span><i class="mdi mdi-chevron-right"></i></span> Brand
					</p>
				</div>
				<div>
					<a href="{{ route('brands.create') }}">
						<button type="button" class="btn btn-primary">
							Add Brand
						</button>
					</a>
				</div>
			</div>

			<div class="product-brand card card-default p-24px">
				<div class="row mb-m-24px">
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
						<a href="brand-info.php?id=brand-id">
						<div class="card card-default">
							<div class="card-body text-center p-24px">
								<div class="image mb-3">
									<img src="{{ URL( 'assets/img/brand/1.jpg') }} " class="img-fluid rounded-circle"
										alt="Avatar Image">
								</div>

								<h5 class="card-title text-dark">Brand A</h5>
								<p class="item-count">2535<span> items</span></p>
								<span class="brand-delete mdi mdi-eye-outline"></span>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
						<a href="brand-info.php?id=brand-id">
						<div class="card card-default">
							<div class="card-body text-center p-24px">
								<div class="image mb-3">
									<img src="{{ URL( 'assets/img/brand/2.jpg') }} " class="img-fluid rounded-circle"
										alt="Avatar Image">
								</div>

								<h5 class="card-title text-dark">Brand B</h5>
								<p class="item-count">535<span> items</span></p>
								<span class="brand-delete mdi mdi-eye-outline"></span>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
						<a href="brand-info.php?id=brand-id">
						<div class="card card-default">
							<div class="card-body text-center p-24px">
								<div class="image mb-3">
									<img src="{{ URL( 'assets/img/brand/3.jpg') }} " class="img-fluid rounded-circle"
										alt="Avatar Image">
								</div>

								<h5 class="card-title text-dark"> Brand C</h5>
								<p class="item-count">3535<span> items</span></p>
								<span class="brand-delete mdi mdi-eye-outline"></span>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
						<a href="brand-info.php?id=brand-id">
						<div class="card card-default">
							<div class="card-body text-center p-24px">
								<div class="image mb-3">
									<img src="{{ URL( 'assets/img/brand/4.jpg') }} " class="img-fluid rounded-circle"
										alt="Avatar Image">
								</div>

								<h5 class="card-title text-dark"> Brand D</h5>
								<p class="item-count">1535<span> items</span></p>
								<span class="brand-delete mdi mdi-eye-outline"></span>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
						<div class="card card-default">
							<div class="card-body text-center p-24px">
								<div class="image mb-3">
									<img src="{{ URL( 'assets/img/brand/5.jpg') }} " class="img-fluid rounded-circle"
										alt="Avatar Image">
								</div>

								<h5 class="card-title text-dark">Brand E</h5>
								<p class="item-count">435<span> items</span></p>
								<span class="brand-delete mdi mdi-eye-outline"></span>
							</div>
						</div>
					</div>
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
						<div class="card card-default">
							<div class="card-body text-center p-24px">
								<div class="image mb-3">
									<img src="{{ URL( 'assets/img/brand/1.jpg') }} " class="img-fluid rounded-circle"
										alt="Avatar Image">
								</div>

								<h5 class="card-title text-dark">Brand F</h5>
								<p class="item-count">4135<span> items</span></p>
								<span class="brand-delete mdi mdi-eye-outline"></span>
							</div>
						</div>
					</div>
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
						<div class="card card-default">
							<div class="card-body text-center p-24px">
								<div class="image mb-3">
									<img src="{{ URL( 'assets/img/brand/2.jpg') }} " class="img-fluid rounded-circle"
										alt="Avatar Image">
								</div>

								<h5 class="card-title text-dark">Brand G</h5>
								<p class="item-count">2435<span> items</span></p>
								<span class="brand-delete mdi mdi-eye-outline"></span>
							</div>
						</div>
					</div>
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
						<div class="card card-default">
							<div class="card-body text-center p-24px">
								<div class="image mb-3">
									<img src="{{ URL( 'assets/img/brand/3.jpg') }} " class="img-fluid rounded-circle"
										alt="Avatar Image">
								</div>

								<h5 class="card-title text-dark">Brand H</h5>
								<p class="item-count">1435<span> items</span></p>
								<span class="brand-delete mdi mdi-eye-outline"></span>
							</div>
						</div>
					</div>
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
						<div class="card card-default">
							<div class="card-body text-center p-24px">
								<div class="image mb-3">
									<img src="{{ URL( 'assets/img/brand/4.jpg') }} " class="img-fluid rounded-circle"
										alt="Avatar Image">
								</div>

								<h5 class="card-title text-dark">Brand I</h5>
								<p class="item-count">2335<span> items</span></p>
								<span class="brand-delete mdi mdi-eye-outline"></span>
							</div>
						</div>
					</div>
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
						<div class="card card-default">
							<div class="card-body text-center p-24px">
								<div class="image mb-3">
									<img src="{{ URL( 'assets/img/brand/5.jpg') }} " class="img-fluid rounded-circle"
										alt="Avatar Image">
								</div>

								<h5 class="card-title text-dark">Brand j</h5>
								<p class="item-count">3335<span> items</span></p>
								<span class="brand-delete mdi mdi-eye-outline"></span>
							</div>
						</div>
					</div>
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
						<div class="card card-default">
							<div class="card-body text-center p-24px">
								<div class="image mb-3">
									<img src="{{ URL( 'assets/img/brand/1.jpg') }} " class="img-fluid rounded-circle"
										alt="Avatar Image">
								</div>

								<h5 class="card-title text-dark">Brand K</h5>
								<p class="item-count">1135<span> items</span></p>
								<span class="brand-delete mdi mdi-eye-outline"></span>
							</div>
						</div>
					</div>
					<div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
						<div class="card card-default">
							<div class="card-body text-center p-24px">
								<div class="image mb-3">
									<img src="{{ URL( 'assets/img/brand/2.jpg') }} " class="img-fluid rounded-circle"
										alt="Avatar Image">
								</div>

								<h5 class="card-title text-dark">Brand L</h5>
								<p class="item-count">1935<span> items</span></p>
								<span class="brand-delete mdi mdi-eye-outline"></span>
							</div>
						</div>
					</div>

                    {{-- Brands --}}
                    @forelse ( $brands as $brand)
                        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
                            <div class="card card-default">
                                <div class="card-body text-center p-24px text-center mx-auto">
                                    <div class="image mb-3" style="width: 100px; height: 100px;">
                                        <img src="{{ URL( 'images/' . $brand->image) }} "
                                            class="img-fluid rounded-circle h-100 w-100"
                                            alt="Avatar Image {{ $brand->name }}">
                                    </div>

                                    <h5 class="card-title text-dark">{{ $brand->name }}</h5>
                                    <p class="item-count">1935<span> items</span></p>
                                    <a href="{{ route('brands.show', $brand->id) }}">
                                        <span class="brand-delete mdi mdi-eye-outline"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div>No Brands</div>
                    @endforelse

				</div>
			</div>

            <!-- END OF ALL PAGE CONTENT -->
        </div>
        <!-- End Content -->

    </div>
    <!-- End Content Wrapper -->

@endsection
