<?php ?>


<!-- HEADER -->
<?php 
include("includes/header.php");
?>

<!-- SIDEBAR -->
<?php 
include("includes/sidebar.php");
?>

<!-- NAVBAR -->
<?php 
include("includes/navbar.php");
?>


    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">

        <!-- START OF CONTENT -->
        <div class="content">
            <!-- ALL PAGE CONTENT -->
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Product List</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>All Product</p>
						</div>
						<div>
							<a href="product-add.php" class="btn btn-primary"> Add New Porduct</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table"
											style="width:100%">
											<thead>
												<tr>
													<th>Product</th>
													<th>Name</th>
													<th>Price</th>
													<th>Offer</th>
													<th>Purchased</th>
													<th>Stock</th>
													<th>Status</th>
													<th>Date</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td><img class="tbl-thumb" src="assets/img/products/p1.jpg" alt="Product Image" /></td>
													<td>Baby shoes</td>
													<td>$20</td>
													<td>25% OFF</td>
													<td>61</td>
													<td>5421</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<a type="button" href="product-detail.php?category&id=1"
																class="btn btn-outline-success">Info</a>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="product-edit.php?category&id=1">Edit</a>
																<a class="dropdown-item" href="deactivate.php?product&id=1">Deactivate</a>
															</div>
														</div>
													</td>
												</tr>

												<tr>
													<td><img class="tbl-thumb" src="assets/img/products/p4.jpg" alt="Product Image" /></td>
													<td>Round Cap with Belt</td>
													<td>$10</td>
													<td>30% OFF</td>
													<td>250</td>
													<td>621</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<a type="button" href="product-detail.php?category&id=1"
																class="btn btn-outline-success">Info</a>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="product-edit.php?category&id=1">Edit</a>
																<a class="dropdown-item" href="deactivate.php?product&id=1">Deactivate</a>
															</div>
														</div>
													</td>
												</tr>

												<tr>
													<td><img class="tbl-thumb" src="assets/img/products/p5.jpg" alt="Product Image" /></td>
													<td>Purse For Woman</td>
													<td>$20</td>
													<td>30% OFF</td>
													<td>220</td>
													<td>621</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td>
													<td>
													<div class="btn-group mb-1">
															<a type="button" href="product-detail.php?category&id=1"
																class="btn btn-outline-success">Info</a>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="product-edit.php?category&id=1">Edit</a>
																<a class="dropdown-item" href="deactivate.php?product&id=1">Deactivate</a>
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

<!-- FOOTER -->
<?php 
include("includes/footer.php");
?>