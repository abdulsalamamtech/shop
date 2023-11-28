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
							<h1>Add Product</h1>
							<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product</p>
						</div>
						<div>
							<a href="product.php" class="btn btn-primary"> View All Product
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Add Product</h2>
								</div>

								<div class="card-body">
									<div class="row ec-vendor-uploads">
										<div class="col-lg-4">
											<div class="ec-vendor-img-upload">
												<div class="ec-vendor-main-img">
													<div class="avatar-upload">
														<div class="avatar-edit">
															<input type='file' id="imageUpload" class="ec-image-upload"
																accept=".png, .jpg, .jpeg" />
															<label for="imageUpload"><img
																	src="assets/img/icons/edit.svg"
																	class="svg_img header_svg" alt="edit" /></label>
														</div>
														<div class="avatar-preview ec-preview">
															<div class="imagePreview ec-div-preview">
																<!-- product image -->
																<img class="ec-image-preview"
																	name="product-image"
																	src="assets/img/products/vender-upload-preview.jpg"
																	alt="edit" />
															</div>
														</div>
													</div>
													<div class="thumb-upload-set col-md-12">
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload01"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																		src="assets/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																		src="assets/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload02"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																		src="assets/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																		src="assets/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload03"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																		src="assets/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																		src="assets/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload04"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																		src="assets/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																		src="assets/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload05"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																		src="assets/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																		src="assets/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																</div>
															</div>
														</div>
														<!-- <div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload06"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																		src="assets/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																		src="assets/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																</div>
															</div>
														</div> -->
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8">
											<div class="ec-vendor-upload-detail">
												<form class="row g-3">
													<div class="col-md-6">
														<label for="product-image" class="form-label">Product name</label>
														<input type="text" class="form-control slug-title" 
															name="product_image" id="product-image">
													</div>
													<div class="col-md-6">
														<label class="form-label">Select Categories</label>
														<select name="categories" id="Categories" class="form-select">
															<optgroup label="Fashion">
																<option value="t-shirt">T-shirt</option>
																<option value="dress">Dress</option>
															</optgroup>
															<optgroup label="Furniture">
																<option value="table">Table</option>
																<option value="sofa">Sofa</option>
															</optgroup>
															<optgroup label="Electronic">
																<option value="phone">I Phone</option>
																<option value="laptop">Laptop</option>
															</optgroup>
														</select>
													</div>
													<div class="col-md-12">
														<label class="form-label">Short Description</label>
														<textarea class="form-control" rows="2"></textarea>
													</div>
													<div class="col-md-4 mb-25">
														<label class="form-label">Colors</label>
														<input type="color" class="form-control form-control-color"
															id="exampleColorInput1" value="#ff6191"
															title="Choose your color">
														<input type="color" class="form-control form-control-color"
															id="exampleColorInput2" value="#33317d"
															title="Choose your color">
														<input type="color" class="form-control form-control-color"
															id="exampleColorInput3" value="#56d4b7"
															title="Choose your color">
														<input type="color" class="form-control form-control-color"
															id="exampleColorInput4" value="#009688"
															title="Choose your color">
														<input type="color" class="form-control form-control-color"
															id="exampleColorInput5" value="#090c96"
															title="Choose your color">
													</div>
													<div class="col-md-8 mb-25">
														<label class="form-label">Size</label>
														<div class="form-checkbox-box">
															<div class="form-check form-check-inline">
																<input type="checkbox" name="s" value="1">
																<label>S</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" name="m" value="1">
																<label>M</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" name="l" value="1">
																<label>L</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" name="xl" value="1">
																<label>XL</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" name="xxl" value="1">
																<label>XXL</label>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<label class="form-label">Price <span>( In NGN )</span></label>
														<input type="number" class="form-control" id="price1">
													</div>
													<div class="col-md-6">
														<label class="form-label">Quantity</label>
														<input type="number" class="form-control" id="quantity1">
													</div>
													<div class="col-md-12">
														<label class="form-label">Full Detail</label>
														<textarea class="form-control" rows="4"></textarea>
													</div>
													<div class="col-md-12">
														<label class="form-label">Product Tags <span>( Type and
																make comma to separate tags )</span></label>
														<input type="text" class="form-control" id="group_tag"
															name="group_tag" value="" placeholder=""
															data-role="tagsinput" />
													</div>
													<div class="col-md-12">
														<button type="submit" class="btn btn-primary">Submit</button>
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

<!-- FOOTER -->
<?php 
include("includes/footer.php");
?>