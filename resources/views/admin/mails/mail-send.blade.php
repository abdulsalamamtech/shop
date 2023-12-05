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
					<h1>Messages</h1>
					<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
						<span><i class="mdi mdi-chevron-right"></i></span>Send Mail
					</p>
				</div>
				<div>
                    <!-- Button -->
                    <a href="mail.php"  class="btn btn-primary">View Recent Messages</a>
				</div>
			</div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <div class="ec-cat-form">
                                <h4>Send New message</h4>

                                <form>

                                    <div class="form-group row">
                                        <label for="text" class="col-12 col-form-label">Email <span>(name@example.com)</span></label> 
                                        <div class="col-12">
                                            <input id="text" name="text" class="form-control here slug-title" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Subject</span></label>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="subject" name="group_tag" value="" placeholder="" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="coverImage"
                                            class="col-sm-4 col-lg-2 col-form-label">Add attachment file <span>(optional)</span></label>
                                        <div class="col-12">
                                            <input type="file" id="brand-image" name="brand-file" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-form-label">Message</label> 
                                        <div class="col-12">
                                            <textarea id="fulldescription" 
                                            name="message" cols="40" rows="4" class="form-control" required></textarea>
                                        </div>
                                    </div> 



                                    <div class="row">
                                        <div class="col-12">
                                            <button name="submit" type="submit" class="btn btn-primary">Send</button>
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

<!-- FOOTER -->
@endsection