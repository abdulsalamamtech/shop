
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
							<h1>Customer Profile</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Profile
							</p>
						</div>
						<div>
							<a href="customer.php" class="btn btn-primary">View All</a>
						</div>
					</div>
					<div class="card bg-white profile-content">
						<div class="row">
							<div class="col-lg-4 col-xl-3">
								<div class="profile-content-left profile-left-spacing">
									<div class="text-center widget-profile px-0 border-0">
										<div class="card-img mx-auto rounded-circle">
											<img src="{{ URL('assets/img/user/u1.jpg')}}" alt="user image">
										</div>
										<div class="card-body">
											<h4 class="py-2 text-dark">Mark deo</h4>
											<p>mark.example@gmail.com</p>
											<a class="btn btn-primary btn-pill my-4" href="mail-send.php?email=mark.example@gmail.com">Send mail</a>
										</div>
									</div>

									<div class="d-flex justify-content-between ">
										
										<div class="text-center pb-4">
											<h6 class="text-dark pb-2">32</h6>
											<p>Cart List</p>
										</div>

										<div class="text-center pb-4">
											<h6 class="text-dark pb-2">546</h6>
											<p>Bought</p>
										</div>

										<div class="text-center pb-4">
											<h6 class="text-dark pb-2">$ 546</h6>
											<p>Amount Spent</p>
										</div>

										<!-- <div class="text-center pb-4">
											<h6 class="text-dark pb-2">11</h6>
											<p>Returned</p>
										</div> -->
									</div>

									<hr class="w-100">

									<div class="contact-info pt-4">
										<h5 class="text-dark">Contact Information</h5>
										<p class="text-dark font-weight-medium pt-24px mb-2">Email address</p>
										<p>mark.example@gmail.com</p>
										<p class="text-dark font-weight-medium pt-24px mb-2">Phone Number</p>
										<p>+00 1234 5678 91</p>
										<p class="text-dark font-weight-medium pt-24px mb-2">State/Country</p>
										<p>Lagos State/Nigeria</p>
										<p class="text-dark font-weight-medium pt-24px mb-2">Social Profile</p>
										<p class="social-button">
											<a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
												<i class="mdi mdi-whatsapp"></i>
											</a>

											<a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
												<i class="mdi mdi-instagram"></i>
											</a>
	
											<a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
												<i class="mdi mdi-facebook"></i>
											</a>

										</p>
									</div>
								</div>
							</div>

							<div class="col-lg-8 col-xl-9">
								<div class="profile-content-right profile-right-spacing py-5">
									<ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
												data-bs-target="#profile" type="button" role="tab"
												aria-controls="profile" aria-selected="true">Profile</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="settings-tab" data-bs-toggle="tab"
												data-bs-target="#settings" type="button" role="tab"
												aria-controls="settings" aria-selected="false">Settings</button>
										</li>
									</ul>
									<div class="tab-content px-3 px-xl-5" id="myTabContent">

										<div class="tab-pane fade show active" id="profile" role="tabpanel"
											aria-labelledby="profile-tab">
											<div class="tab-widget mt-5">
												<div class="row">
													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
															<div class="icon rounded-circle bg-warning mr-3">
																<i class="mdi mdi-cart-outline text-white "></i>
															</div>

															<div class="media-body align-self-center">
																<h4 class="text-primary mb-2">32</h4>
																<p>Cart List</p>
															</div>
														</div>
													</div>
													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
															<div class="icon rounded-circle mr-3 bg-primary">
																<i class="mdi mdi-account-outline text-white "></i>
															</div>

															<div class="media-body align-self-center">
																<h4 class="text-primary mb-2">546</h4>
																<p>Bought</p>
															</div>
														</div>
													</div>

													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
															<div class="icon rounded-circle bg-danger mr-3">
																<i class="mdi mdi-cached text-white "></i>
															</div>

															<div class="media-body align-self-center">
																<h4 class="text-primary mb-2">3</h4>
																<p>Returned</p>
															</div>
														</div>
													</div>

													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
															<div class="icon rounded-circle mr-3 bg-success">
																<i class="mdi mdi-ticket-percent text-white "></i>
															</div>

															<div class="media-body align-self-center">
																<h4 class="text-primary mb-2">$ 546</h4>
																<p>Amount spent</p>
															</div>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-xl-12">

														<!-- Notification Table -->
														<div class="card card-default">
															<div class="card-header justify-content-between mb-1">
																<h2>Latest Notifications</h2>
																<div>
																	<button class="text-black-50 mr-2 font-size-20"><i
																			class="mdi mdi-cached"></i></button>
																</div>

															</div>
															<div class="card-body compact-notifications" data-simplebar
																style="height: 434px;">
																<div
																	class="media pb-3 align-items-center justify-content-between">
																	<div
																		class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
																		<i
																			class="mdi mdi-cart-outline font-size-20"></i>
																	</div>
																	<div class="media-body pr-3 ">
																		<a class="mt-0 mb-1 font-size-15 text-dark"
																			href="#">New Order</a>
																		<p>Selena has placed an new order</p>
																	</div>
																	<span class=" font-size-12 d-inline-block"><i
																			class="mdi mdi-clock-outline"></i> 10
																		AM</span>
																</div>

																<div
																	class="media py-3 align-items-center justify-content-between">
																	<div
																		class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
																		<i
																			class="mdi mdi-email-outline font-size-20"></i>
																	</div>
																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark"
																			href="#">New Enquiry</a>
																		<p>Phileine has placed an new order</p>
																	</div>
																	<span class=" font-size-12 d-inline-block"><i
																			class="mdi mdi-clock-outline"></i> 9
																		AM</span>
																</div>


																<div
																	class="media py-3 align-items-center justify-content-between">
																	<div
																		class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
																		<i
																			class="mdi mdi-stack-exchange font-size-20"></i>
																	</div>
																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark"
																			href="#">Support Ticket</a>
																		<p>Emma has placed an new order</p>
																	</div>
																	<span class=" font-size-12 d-inline-block"><i
																			class="mdi mdi-clock-outline"></i> 10
																		AM</span>
																</div>

																<div
																	class="media py-3 align-items-center justify-content-between">
																	<div
																		class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
																		<i
																			class="mdi mdi-cart-outline font-size-20"></i>
																	</div>
																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark"
																			href="#">New order</a>
																		<p>Ryan has placed an new order</p>
																	</div>
																	<span class=" font-size-12 d-inline-block"><i
																			class="mdi mdi-clock-outline"></i> 10
																		AM</span>
																</div>

																<div
																	class="media py-3 align-items-center justify-content-between">
																	<div
																		class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
																		<i
																			class="mdi mdi-calendar-blank font-size-20"></i>
																	</div>
																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark"
																			href="#">Comapny Meetup</a>
																		<p>Phileine has placed an new order</p>
																	</div>
																	<span class=" font-size-12 d-inline-block"><i
																			class="mdi mdi-clock-outline"></i> 10
																		AM</span>
																</div>

																<div
																	class="media py-3 align-items-center justify-content-between">
																	<div
																		class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
																		<i
																			class="mdi mdi-stack-exchange font-size-20"></i>
																	</div>
																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark"
																			href="#">Support Ticket</a>
																		<p>Emma has placed an new order</p>
																	</div>
																	<span class=" font-size-12 d-inline-block"><i
																			class="mdi mdi-clock-outline"></i> 10
																		AM</span>
																</div>

																<div
																	class="media py-3 align-items-center justify-content-between">
																	<div
																		class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
																		<i
																			class="mdi mdi-email-outline font-size-20"></i>
																	</div>
																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark"
																			href="#">New Enquiry</a>
																		<p>Phileine has placed an new order</p>
																	</div>
																	<span class=" font-size-12 d-inline-block"><i
																			class="mdi mdi-clock-outline"></i> 9
																		AM</span>
																</div>

															</div>
															<div class="mt-3"></div>
														</div>

													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane fade" id="settings" role="tabpanel"
											aria-labelledby="settings-tab">
											<div class="tab-pane-content mt-5">
												<form>

													<div class="row mb-2">
														<div class="col-lg-6">
															<div class="form-group">
																<label for="firstName">First name</label>
																<input type="text" class="form-control" id="firstName"
																	value="First name">
															</div>
														</div>

														<div class="col-lg-6">
															<div class="form-group">
																<label for="lastName">Last name</label>
																<input type="text" class="form-control" id="lastName"
																	value="Last name">
															</div>
														</div>
													</div>

													<div class="form-group mb-4">
														<label for="userName">User name</label>
														<input type="text" class="form-control" id="userName"
															value="User name">
														<span class="d-block mt-1">Accusamus nobis at omnis consequuntur
															culpa tempore saepe animi.</span>
													</div>

													<div class="form-group mb-4">
														<label for="email">Email</label>
														<input type="email" class="form-control" id="email"
															value="ekka.example@gmail.com">
													</div>

													<div class="form-group mb-4">
														<label for="oldPassword">Old password</label>
														<input type="password" class="form-control" id="oldPassword">
													</div>

													<div class="form-group mb-4">
														<label for="newPassword">New password</label>
														<input type="password" class="form-control" id="newPassword">
													</div>

													<div class="form-group mb-4">
														<label for="conPassword">Confirm password</label>
														<input type="password" class="form-control" id="conPassword">
													</div>

													<div class="d-flex justify-content-end mt-5">
														<button type="submit"
															class="btn btn-primary mb-2 btn-pill">Update
															Profile</button>
													</div>
												</form>
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