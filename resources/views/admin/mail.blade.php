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
            <div class="breadcrumb-wrapper breadcrumb-contacts">
				<div>
					<h1>Messages</h1>
					<p class="breadcrumbs"><span><a href="index.php">Home</a></span>
						<span><i class="mdi mdi-chevron-right"></i></span>My Mail
					</p>
				</div>
				<div>
                    <!-- Button -->
                    <a href="mail-send.php"  class="btn btn-primary">Send Mail</a>
				</div>
			</div>
            <div class="row">
                <div class="col-xl-12">

                    <!-- Notification Table -->
                    <div class="card card-default">
                        <div class="card-header justify-content-between mb-1">
                            <h2>Latest Message</h2>
                            <div>
                                <button class="text-black-50 mr-2 font-size-20"><i
                                        class="mdi mdi-cached"></i></button>
                            </div>

                        </div>
                        <div class="card-body compact-notifications" data-simplebar
                            style="height: 434px;">
                           
                            <div class="tab-pane fade show active" id="home2" role="tabpanel">
                                        <ul class="list-unstyled" data-simplebar style="height: 360px">
                                            <style>
                                                .img-box img{
                                                    width: 50px !important;
                                                    height: 50px !important;
                                                }
                                            </style>
                                            <li>
                                                <a href="mail-content.php?message&id=1">
                                                    <div class="row py-3 justify-content-between align-items-end media media-message media-notification">
                                                        <div class="col-sm-12 col-md-4 img-box">
                                                            <img class="rounded-circle" 
                                                                src="assets/img/user/u1.jpg" 
                                                                alt="Image">
                                                            <div class="title ">
                                                                <h4>Username</h4>
                                                                <p>Username@ecommerce.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="title">
                                                                <h4>Message Subject</h4>
                                                                <p>The content of the message goes hear...</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-2 font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i>
                                                            <?=  20 + date("i", time()) . " min ago..."?>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="my-3">
                                            </li>
                                            <li>
                                                <a href="mail-content.php?message&id=1">
                                                    <div class="row py-3 justify-content-between align-items-end media media-message media-notification">
                                                        <div class="col-sm-12 col-md-4 img-box">
                                                            <img class="rounded-circle" 
                                                                src="assets/img/user/u2.jpg" 
                                                                alt="Image">
                                                            <div class="title ">
                                                                <h4>Username</h4>
                                                                <p>Username@ecommerce.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="title">
                                                                <h4>Message Subject</h4>
                                                                <p>The content of the message goes hear...</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-2 font-size-12 font-weight-medium text-secondary">
                                                            <i class="mdi mdi-clock-outline"></i>
                                                            <?=  date("i", time()) . " min ago..."?>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="my-3">
                                            </li>


                                            <!-- SERVER OVERLOAD CONTENT -->
                                            <!-- <li>
                                                <a href="javscript:void(0)"
                                                    class="media media-message media-notification">

                                                    <div
                                                        class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
                                                        <i class="mdi mdi-server-network-off font-size-20"></i>
                                                    </div>

                                                    <div class="media-body d-flex justify-content-between">
                                                        <div class="message-contents">
                                                            <h4 class="title">Server overloaded</h4>
                                                            <p class="last-msg font-size-14">Donec mattis augue
                                                                a nisl consequat, nec imperdiet ex rutrum. Fusce
                                                                et vehicula enim. Sed in enim eu odio vehic.</p>

                                                            <span
                                                                class="font-size-12 font-weight-medium text-secondary">
                                                                <i class="mdi mdi-clock-outline"></i> 30 min
                                                                ago...
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li> -->

                                        </ul>
                                    </div>
                        </div>
                        <div class="mt-3"></div>
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