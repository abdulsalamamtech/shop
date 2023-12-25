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
							<h1>Add Product</h1>
							<p class="breadcrumbs"><span><a href="{{ route('admin') }}">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product</p>
						</div>
						<div>
							<a href="{{ route('products.index') }}" class="btn btn-primary"> View All Product
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
                                    {{-- Start Main Form --}}
                                        <form action="{{ route('products.store') }}" method="POST" class="row ec-vendor-uploads">
                                            @csrf
                                            @method('POST')
                                            <div class="col-lg-4">
                                                <div class="ec-vendor-img-upload">
                                                    <div class="ec-vendor-main-img">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <!-- The name of the banner mainimage-->
                                                                <input type='file' id="imageUpload" class="ec-image-upload"
                                                                    accept=".png, .jpg, .jpeg" 
                                                                    name="image"/>
                                                                <label for="imageUpload"><img
                                                                        src="{{ URL('assets/img/icons/edit.svg') }}"
                                                                        class="svg_img header_svg" alt="edit" /></label>
                                                            </div>
                                                            <div class="avatar-preview ec-preview">
                                                                <div class="imagePreview ec-div-preview">
                                                                    <!-- product image -->
                                                                    <img class="ec-image-preview"
                                                                        name="product-image"
                                                                        src="{{ URL('assets/img/products/vender-upload-preview.jpg') }}"
                                                                        alt="edit" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="thumb-upload-set col-md-12">
                                                            <!-- The name of the otional imageupload-1 name="imageupload-1" -->
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' id="thumbUpload01" name="product_image[]"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="{{ URL('assets/img/icons/edit.svg') }}"
                                                                            class="svg_img header_svg" alt="edit" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="{{ URL('assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- The name of the otional imageupload-2 name="imageupload-2" -->
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' id="thumbUpload02" name="product_image[]"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="{{ URL('assets/img/icons/edit.svg') }}"
                                                                            class="svg_img header_svg" alt="edit" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="{{ URL('assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- The name of the otional imageupload-3 name="imageupload-3" -->
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' id="thumbUpload03" name="product_image[]"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="{{ URL('assets/img/icons/edit.svg') }}"
                                                                            class="svg_img header_svg" alt="edit" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="{{ URL('assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- The name of the otional imageupload-4 name="imageupload-4" -->
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' id="thumbUpload04" name="product_image[]"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="{{ URL('assets/img/icons/edit.svg') }}"
                                                                            class="svg_img header_svg" alt="edit" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="{{ URL('assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- The name of the otional imageupload-5 name="imageupload-5" -->
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' id="thumbUpload05" name="product_image[]"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="{{ URL('assets/img/icons/edit.svg') }}"
                                                                            class="svg_img header_svg" alt="edit" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="{{ URL('assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- The name of the otional imageupload-6 name="imageupload-6" -->
                                                            <div class="thumb-upload">
                                                                <div class="thumb-edit">
                                                                    <input type='file' id="thumbUpload06" name="product_image[]"
                                                                        class="ec-image-upload"
                                                                        accept=".png, .jpg, .jpeg" />
                                                                    <label for="imageUpload"><img
                                                                            src="{{ URL('assets/img/icons/edit.svg') }}"
                                                                            class="svg_img header_svg" alt="edit" /></label>
                                                                </div>
                                                                <div class="thumb-preview ec-preview">
                                                                    <div class="image-thumb-preview">
                                                                        <img class="image-thumb-preview ec-image-preview"
                                                                            src="{{ URL('assets/img/products/vender-upload-thumb-preview.jpg') }}"
                                                                            alt="edit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="w-100 ec-vendor-upload-detail">
                                                    {{-- Start Sub Form --}}
                                                    <div class="row g-3 sub-form">
                                                        <!-- Product Name-->
                                                        <div class="col-md-12 mb-25">
                                                            <label for="name" class="form-label">Product name</label>
                                                            <input type="text" class="form-control slug-title"
                                                                name="name" id="name">
                                                                @error('name')
                                                                    <span class="error">{{ $message }}</span>
                                                                @enderror
                                                        </div>
                                                        <!-- Product Category-->
                                                        <div class="col-md-6 mb-25">
                                                            <label for="sub_category_id" class="form-label">Select Category</label>
                                                            <select name="sub_category_id" id="sub_category_id" class="form-select">
                                                                <option value=""></option>
                                                                <optgroup label="Fashion">
                                                                    <option value="2">Dress</option>
                                                                </optgroup>
                                                                <optgroup label="Furniture">
                                                                    <option value="1">Table</option>
                                                                    <option value="2">Sofa</option>
                                                                </optgroup>
                                                                <optgroup label="Electronic">
                                                                    <option value="3">I Phone</option>
                                                                    <option value="4">Laptop</option>
                                                                </optgroup>
                                                            </select>
                                                            @error('sub_category_id')
                                                                <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <!-- Product Brands-->
                                                        <div class="col-md-6 mb-25">
                                                            <label for="brand" class="form-label">Select Barnd</label>
                                                            <select name="brand" id="brand" class="form-select">
                                                                <option value=""></option>
                                                                <option value="1">Premium</option>
                                                                <option value="2">Dreamers</option>
                                                                <option value="3">Nike</option>
                                                            </select>
                                                            @error('brand')
                                                                <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <!-- Short Description-->
                                                        <div class="col-md-12 mb-25">
                                                            <label for="short_description" class="form-label">Short Description</label>
                                                            <textarea name="short_description" id="short_description" class="form-control" rows="2"></textarea>
                                                            @error('short_description')
                                                                <span class="error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <!-- Colors-->
                                                        <div class="col-md-12 mb-25">
                                                            <label for="colors" class="form-label">Colors</label>
                                                            <div class="form-checkbox-box" id="colors">
                                                                <div class="form-check form-check-inline">
                                                                    <input type="color" class="form-control form-control-color"
                                                                        id="exampleColorInput1" value="#ff6191"
                                                                        title="Choose your color"
                                                                        name="colors[]">
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input type="color" class="form-control form-control-color"
                                                                        id="exampleColorInput3" value="#56d4b7"
                                                                        title="Choose your color"
                                                                        name="colors[]">
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input type="color" class="form-control form-control-color"
                                                                        id="exampleColorInput2" value="#33317d"
                                                                        title="Choose your color"
                                                                        name="colors[]">
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input type="color" class="form-control form-control-color"
                                                                        id="exampleColorInput4" value="#009688"
                                                                        title="Choose your color"
                                                                        name="colors[]">
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input type="color" class="form-control form-control-color"
                                                                        id="exampleColorInput5" value="#090c96"
                                                                        title="Choose your color"
                                                                        name="colors[]">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Sizes-->
                                                        <div class="col-md-8 mb-25">
                                                            <label class="form-label">Size</label>
                                                            <div class="form-checkbox-box">
                                                                <div class="form-check form-check-inline">
                                                                    <input type="checkbox" name="sizes[]" value="s" id="s">
                                                                    <label for="s">S</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input type="checkbox" name="sizes[]" value="m" id="m">
                                                                    <label for="m">M</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input type="checkbox" name="sizes[]" value="l" id="l">
                                                                    <label for="l">L</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input type="checkbox" name="sizes[]" value="xl" id="xxl">
                                                                    <label for="xl">XL</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input type="checkbox" name="sizes[]" value="xxl" id="xxl">
                                                                    <label for="xxl">XXL</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Price-->
                                                        <div class="col-md-6 mb-25">
                                                            <label for="price" class="form-label">Price <span>( In NGN )</span></label>
                                                            <input name="price" type="number" class="form-control" id="price">
                                                        </div>
                                                        <!-- Qantity-->
                                                        <div class="col-md-6 mb-25">
                                                            <label for="quantity" class="form-label">Quantity</label>
                                                            <input name="quantity" type="number" class="form-control" id="quantity">
                                                        </div>
                                                        <!-- Full Description-->
                                                        <div class="col-md-12 mb-25">
                                                            <label for="description" class="form-label">Full Detail</label>
                                                            <textarea name="description" class="form-control" rows="4" id="description"></textarea>
                                                        </div>
                                                        <!-- Product Tags-->
                                                        <div class="col-md-12 mb-25">
                                                            <label class="form-label">Product Tags <span>( Type and
                                                                    make comma to separate tags )</span></label>
                                                            <input type="text" class="form-control" id="group_tag"
                                                                name="tags" value="" placeholder=""
                                                                data-role="tagsinput" />
                                                        </div>
                                                        <!-- Submit Button-->
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                    {{-- EndSub Form --}}
                                                </div>
                                            </div>
                                        </form>
                                    {{-- End Main Form --}}
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
