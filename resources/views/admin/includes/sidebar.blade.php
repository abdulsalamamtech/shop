<!-- ADMIN HEADER SIDEBAR -->

<!-- LEFT MAIN SIDEBAR -->
<div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">

        <div class="ec-brand">
            <style>
                .mylogo{
                    font-size: 35px;
                }
            </style>
            <a href="index.php" title="ECommerce">
                <!-- <img class="ec-brand-icon" src="assets/img/logo/ec-site-logo.png" alt="" /> -->
                <i class="mdi mdi-cart mylogo"></i>
                <span class="ec-brand-name text-truncate">Shop</span>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <!-- Dashboard -->
                <li class="<?= (isset($_GET['active']))? 'active' : ''?>">
                    <a class="sidenav-item-link" href="index.php">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <hr>
                </li>

                <!-- Customers -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Customers</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="users" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="customer.php">
                                    <span class="nav-text">All Customers</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="customer-grid.php">
                                    <span class="nav-text">Customers Grid</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                </li>

                <!-- Category -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns"></i>
                        <span class="nav-text">Categories</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="category.php">
                                    <span class="nav-text">Main Category</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="category-add.php">
                                    <span class="nav-text">Add Main Category</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="sub-category.php">
                                    <span class="nav-text">Sub Category</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="sub-category-add.php">
                                    <span class="nav-text">Add Sub Category</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <!-- Brands -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-palette"></i>
                        <span class="nav-text">Brands</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="brand.php">
                                    <span class="nav-text">All Brands</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="brand-add.php">
                                    <span class="nav-text">Add Brand</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <!-- Products -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-palette-advanced"></i>
                        <span class="nav-text">Products</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="product.php">
                                    <span class="nav-text">All Product</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="product-grid.php">
                                    <span class="nav-text">Product Grid</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="product-add.php">
                                    <span class="nav-text">Add Product</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Orders -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Orders</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="order-new.php">
                                    <span class="nav-text">New Order</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="order-history.php">
                                    <span class="nav-text">Order History</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="order-return.php">
                                    <span class="nav-text">Returned Order</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                </li>

                <!-- Notification -->
                <li class="">
                    <a class="sidenav-item-link" href="notification.php">
                        <i class="mdi mdi-bell"></i>
                        <span class="nav-text">Notification</span>
                    </a>
                </li>

                <!-- Reviews -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-star"></i>
                        <span class="nav-text">Reviews</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="review.php">
                                    <span class="nav-text">All Review</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="comment.php">
                                    <span class="nav-text">Comments</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Messages -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-email"></i>
                        <span class="nav-text">Messages</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="icons" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="mail.php">
                                    <span class="nav-text">My Mail</span>
                                </a>
                            </li>                      
                            <li class="">
                                <a class="sidenav-item-link" href="mail-send.php">
                                    <span class="nav-text">Send Mail</span>
                                </a>
                            </li>                     
                        </ul>
                    </div>
                </li>

                <!-- Messages -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-rocket"></i>
                        <span class="nav-text">Subsribers</span> <b class="caret"></i></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="icons" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="subscriber.php">
                                    <span class="nav-text">All Subscribers</span>
                                </a>
                            </li>                      
                            <li class="">
                                <a class="sidenav-item-link" href="subscriber-mail.php">
                                    <span class="nav-text">Subscribers Mail</span>
                                </a>
                            </li>                      
                        </ul>
                    </div>
                    <hr>
                </li>


                <!-- Settings -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-eye-settings"></i>
                        <span class="nav-text">Settings</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="icons" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="setting-admin.php">
                                    <span class="nav-text">Admin Setting</span>
                                </a>
                            </li>                      
                            <li class="">
                                <a class="sidenav-item-link" href="setting-website.php">
                                    <span class="nav-text">Website settings</span>
                                </a>
                            </li>                      
                        </ul>
                    </div>
                </li>


                <!-- Logout -->
                <li class="">
                    <a class="sidenav-item-link" href="logout">
                        <i class="mdi mdi-logout"></i>
                        <span class="nav-text">LogOut</span>
                    </a>
                </li>


                <!-- Other Pages -->
                <!-- <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Other Pages</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="otherpages" data-parent="#sidebar-menu">
                            <li class="has-sub">
                                <a href="404.html">404 Page</a>
                            </li>
                        </ul>
                    </div>
                </li> -->

            </ul>
        </div>
    </div>
</div>
<!-- END OF LEFT MAIN SIDEBAR -->