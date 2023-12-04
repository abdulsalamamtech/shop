
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
					<h1>Customers List</h1>
					<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
						<span><i class="mdi mdi-chevron-right"></i></span>Customers
					</p>
				</div>
				<div>
					<a href="customer-grid.php" class="btn btn-primary">Top Customers</a>
				</div>
			</div>
			    
			<!-- Top Statistics -->
			<div class="row">
                <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                    <div class="card card-mini dash-card card-1">
                        <div class="card-body">
                            <h2 class="mb-1">1,503</h2>
                            <p>Top Customers</p>
                            <span class="mdi mdi-account-arrow-left"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                    <div class="card card-mini dash-card card-2">
                        <div class="card-body">
                            <h2 class="mb-1">79,503</h2>
                            <p>Total Customers</p>
                            <span class="mdi mdi-account-clock"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                    <div class="card card-mini dash-card card-3">
                        <div class="card-body">
                            <h2 class="mb-1">15,503</h2>
                            <p>Daily Order</p>
                            <span class="mdi mdi-package-variant"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                    <div class="card card-mini dash-card card-4">
                        <div class="card-body">
                            <h2 class="mb-1">$98,503</h2>
                            <p>Daily Revenue</p>
                            <span class="mdi mdi-currency-usd"></span>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col-12">
					<div class="ec-vendor-list card card-default">
						<div class="card-body">
							<div class="table-responsive">
								<table id="responsive-data-table" class="table">
									<thead>
										<tr>
											<th>Profile</th>
											<th>Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Total Buy</th>
											<th>Status</th>
											<th>Join On</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td><img class="vendor-thumb" src="assets/img/vendor/u1.jpg" alt="user profile" /></td>
											<td>Marlee Rena</td>
											<td>marleerena@gmail.com</td>
											<td>+1-256-325-8652</td>
											<td>2161</td>
											<td>ACTIVE</td>
											<td>2021-10-30</td>
											<td>
												<div class="btn-group mb-1">
													<a type="button" href="customer-info.php?email=marleerena@gmail.com"
														class="btn btn-outline-success">Info</a>
													<button type="button"
														class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
														data-bs-toggle="dropdown" aria-haspopup="true"
														aria-expanded="false" data-display="static">
														<span class="sr-only">Info</span>
													</button>

													<div class="dropdown-menu">
														<a class="dropdown-item" href="mail-send.php?email=marleerena@gmail.com">Send Mail</a>
														<a class="dropdown-item" href="../../controller/admin/deactivate.php?customer&id=3&email=marleerena@gmail.com">Deactivate</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td><img class="vendor-thumb" src="assets/img/vendor/u2.jpg" alt="user profile" /></td>
											<td>Johnee Bolbi</td>
											<td>johneebolbi@gmail.com</td>
											<td>+5-256-325-8652</td>
											<td>5161</td>
											<td>ACTIVE</td>
											<td>2021-10-25</td>
											<td>
												<div class="btn-group mb-1">
													<a type="button" href="customer-info.php?email=marleerena@gmail.com"
														class="btn btn-outline-success">Info</a>
													<button type="button"
														class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
														data-bs-toggle="dropdown" aria-haspopup="true"
														aria-expanded="false" data-display="static">
														<span class="sr-only">Info</span>
													</button>

													<div class="dropdown-menu">
														<a class="dropdown-item" href="mail-send.php?email=marleerena@gmail.com">Send Mail</a>
														<a class="dropdown-item" href="../../controller/admin/deactivate.php?customer&id=2&email=marleerena@gmail.com">Deactivate</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td><img class="vendor-thumb" src="assets/img/vendor/u3.jpg" alt="user profile" /></td>
											<td>Johnee Bolbi</td>
											<td>johneebolbi@gmail.com</td>
											<td>+5-256-325-8652</td>
											<td>5161</td>
											<td>ACTIVE</td>
											<td>2021-10-25</td>
											<td>
												<div class="btn-group mb-1">
													<a type="button" href="customer-info.php?email=marleerena@gmail.com"
														class="btn btn-outline-success">Info</a>
													<button type="button"
														class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
														data-bs-toggle="dropdown" aria-haspopup="true"
														aria-expanded="false" data-display="static">
														<span class="sr-only">Info</span>
													</button>

													<div class="dropdown-menu">
														<a class="dropdown-item" href="mail-send.php?email=marleerena@gmail.com">Send Mail</a>
														<a class="dropdown-item" href="../../controller/admin/deactivate.php?customer&id=3&email=marleerena@gmail.com">Deactivate</a>
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
			</div>

            <!-- END OF ALL PAGE CONTENT -->
        </div> 
        <!-- End Content -->

    </div> 
    <!-- End Content Wrapper -->

@endsection