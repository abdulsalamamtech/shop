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
            <a href="index" title="Shop Dashboard">
                <img class="ec-brand-icon" src="{{-- URL('assets/img/logo/ec-site-logo.png') --}}" alt="" />
                <i class="mdi mdi-cart mylogo"></i>
                <span class="ec-brand-name text-truncate">Shop</span>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">

                <!-- Dashboard -->
                <li class="{{ (request()->is('admin') ? 'active' : 'not-active') }}">
                    <a class="sidenav-item-link" href="/admin">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <hr>
                </li>

                <!-- Customers -->
                <li class="{{ (request()->is('admin/customers*') ? 'active' : 'not-active') }} has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Customers</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="users" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="admin/customers">
                                    <span class="nav-text">All Customers</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="admin/customers/grid">
                                    <span class="nav-text">Customers Grid</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                </li>

                <!-- Category -->
                <li class="{{ (request()->is('admin/categories*') ? 'active' : 'not-active') }}  has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns"></i>
                        <span class="nav-text">Categories</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="admin/categories">
                                    <span class="nav-text">Main Category</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="admin/categories/add">
                                    <span class="nav-text">Add Main Category</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="admin/sub-categories">
                                    <span class="nav-text">Sub Category</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="admin/sub-categories/add">
                                    <span class="nav-text">Add Sub Category</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <!-- Brands -->
                <li class="{{ (request()->is('admin/brands*') ? 'active' : 'not-active') }} has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-palette"></i>
                        <span class="nav-text">Brands</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="admin/brands">
                                    <span class="nav-text">All Brands</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="admin/brands/add">
                                    <span class="nav-text">Add Brand</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <!-- Products -->
                <li class="{{ (request()->is('admin/products*') ? 'active' : 'not-active') }} has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-palette-advanced"></i>
                        <span class="nav-text">Products</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="products" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="products">
                                    <span class="nav-text">All Product</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="products/grid">
                                    <span class="nav-text">Product Grid</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="products/add">
                                    <span class="nav-text">Add Product</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Orders -->
                <li class="{{ (request()->is('admin/orders*') ? 'active' : 'not-active') }} has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Orders</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="orders/new">
                                    <span class="nav-text">New Order</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="orders/history">
                                    <span class="nav-text">Order History</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="orders/return">
                                    <span class="nav-text">Returned Order</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                </li>

                <!-- Notification -->
                <li class="">
                    <a class="sidenav-item-link" href="notification">
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
                                <a class="sidenav-item-link" href="review">
                                    <span class="nav-text">All Review</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="comment">
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
                                <a class="sidenav-item-link" href="mail">
                                    <span class="nav-text">My Mail</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="mail-send">
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
                                <a class="sidenav-item-link" href="subscriber">
                                    <span class="nav-text">All Subscribers</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="subscriber-mail">
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
                                <a class="sidenav-item-link" href="setting-admin">
                                    <span class="nav-text">Admin Setting</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="setting-website">
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
