
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
							<h1>Top Customers</h1>
							<p class="breadcrumbs"><span><a href="/admin">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Customers
							</p>
						</div>
						<div>
							<a href="customer.php" class="btn btn-primary">View All Customers</a>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 col-xl-4 mb-24px">
							<div class="ec-user-card card card-default p-4 view-detail"
									data-bs-toggle="modal" data-bs-target="#modalContact">
									<i class="mdi mdi-eye-plus-outline"></i>
								<a class="media text-secondary">
									<img src=" {{URL('assets/img/user/u-xl-1.jpg' ) }}" class="mr-3 img-fluid" alt="Avatar Image">

									<div class="media-body">
										<h5 class="mt-0 mb-2 text-dark">Emma Smith</h5>

										<ul class="list-unstyled">
											<li class="d-flex mb-1">
												<i class="mdi mdi-email mr-1"></i>
												<span>exmaple@email.com</span>
											</li>
											<li class="d-flex mb-1">
												<i class="mdi mdi-phone mr-1"></i>
												<span>(123) 888 777 632</span>
											</li>
										</ul>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 mb-24px">
							<div class="ec-user-card card card-default p-4 view-detail"
									data-bs-toggle="modal" data-bs-target="#modalContact">
									<i class="mdi mdi-eye-plus-outline"></i>
								<a class="media text-secondary">
									<img src=" {{URL('assets/img/user/u-xl-1.jpg' ) }}" class="mr-3 img-fluid" alt="Avatar Image">

									<div class="media-body">
										<h5 class="mt-0 mb-2 text-dark">Emma Smith</h5>

										<ul class="list-unstyled">
											<li class="d-flex mb-1">
												<i class="mdi mdi-email mr-1"></i>
												<span>exmaple@email.com</span>
											</li>
											<li class="d-flex mb-1">
												<i class="mdi mdi-phone mr-1"></i>
												<span>(123) 888 777 632</span>
											</li>
										</ul>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-xl-4 mb-24px">
							<div class="ec-user-card card card-default p-4 view-detail"
									data-bs-toggle="modal" data-bs-target="#modalContact">
									<i class="mdi mdi-eye-plus-outline"></i>
								<a class="media text-secondary">
									<img src=" {{URL('assets/img/user/u-xl-1.jpg' ) }}" class="mr-3 img-fluid" alt="Avatar Image">

									<div class="media-body">
										<h5 class="mt-0 mb-2 text-dark">Emma Smith</h5>

										<ul class="list-unstyled">
											<li class="d-flex mb-1">
												<i class="mdi mdi-email mr-1"></i>
												<span>exmaple@email.com</span>
											</li>
											<li class="d-flex mb-1">
												<i class="mdi mdi-phone mr-1"></i>
												<span>(123) 888 777 632</span>
											</li>
										</ul>
									</div>
								</a>
							</div>
						</div>

					</div>

					<!-- Customer Contact Modal -->
					<div class="modal fade modal-contact-detail" id="modalContact" tabindex="-1" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header justify-content-end border-bottom-0">

									<button type="button" class="btn-close-icon" data-bs-dismiss="modal"
										aria-label="Close">
										<i class="mdi mdi-close"></i>
									</button>
								</div>

								<div class="modal-body pt-0">
									<div class="row no-gutters">
										<div class="col-md-6">
											<div class="profile-content-left px-4">
												<div class="text-center widget-profile px-0 border-0">
													<div class="card-img mx-auto rounded-circle">
														<img src=" {{URL('assets/img/user/u6.jpg' ) }}" alt="user image">
													</div>

													<div class="card-body">
														<h4 class="py-2 text-dark">John Devilo</h4>
														<p>johnexample@gmail.com</p>
														<a class="btn btn-primary btn-pill my-4" href="mail-send.php?email=johnexample@gmail.com">Send mail</a>
													</div>
												</div>

												<div class="d-flex justify-content-between ">
													<div class="text-center pb-4">
														<h6 class="text-dark pb-2">30</h6>
														<p>Cart List</p>
													</div>

													<div class="text-center pb-4">
														<h6 class="text-dark pb-2">354</h6>
														<p>Bought</p>
													</div>

													<div class="text-center pb-4">
														<h6 class="text-dark pb-2">4</h6>
														<p>Returned</p>
													</div>

													<div class="text-center pb-4">
														<h6 class="text-dark pb-2">$ 1200</h6>
														<p>Amount Spent</p>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="contact-info px-4">
												<h4 class="text-dark mb-1">Contact Details</h4>
												<p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
												<p>johnexample@gmail.com</p>
												<p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
												<p>+00 9539 2641 31</p>
												<p class="text-dark font-weight-medium pt-4 mb-2">State/Country</p>
												<p>Lagos State/Nigeria</p>
												<p class="text-dark font-weight-medium pt-4 mb-2">Address</p>
												<p>123/2, Kings fort street-2, Ikeja, lagos State, Nigeria.</p>
											</div>
										</div>
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