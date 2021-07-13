    <!-- NAVIGATION WRAP -->
    <div class="navigation-wrap">
        <!-- NAVIGATION -->
        <nav class="navigation">
            <!-- LOGO -->
            <figure class="logo">
                <a href="{{ route('products.index') }}">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="logo">
                </a>
                <figcaption>The Trickster</figcaption>
            </figure>
            <!-- /LOGO -->

            @include('frontend.partials.carts.list')

            <!-- MAIN MENU -->
            <ul class="main-menu">
                <!-- MAIN MENU ITEM -->
                <li class="main-menu-item">
                    <a href="{{ route('products.index') }}">Home</a>
                </li>
                <!-- /MAIN MENU ITEM -->

                {{-- <!-- MAIN MENU ITEM -->
                <li class="main-menu-item">
                    <a href="aboutus.html">About</a>
                </li>
                <!-- /MAIN MENU ITEM -->

                <!-- MAIN MENU ITEM -->
                <li class="main-menu-item">
                    <a href="#">
                        Shop
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow face-down">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </a>

                    <!-- MENU DROPDOWN -->
                    <ul class="menu-dropdown">
                        <!-- MENU DROPDOWN ITEM -->
                        <li class="menu-dropdown-item">
                            <a href="shop-sidebar-grid.html">Sidebar 3 Col Grid</a>
                        </li>
                        <!-- /MENU DROPDOWN ITEM -->

                        <!-- MENU DROPDOWN ITEM -->
                        <li class="menu-dropdown-item">
                            <a href="shop-grid.html">4 Columns Grid</a>
                        </li>
                        <!-- /MENU DROPDOWN ITEM -->

                        <!-- MENU DROPDOWN ITEM -->
                        <li class="menu-dropdown-item">
                            <a href="shop-sidebar-list.html">Sidebar 3 Col List</a>
                        </li>
                        <!-- /MENU DROPDOWN ITEM -->

                        <!-- MENU DROPDOWN ITEM -->
                        <li class="menu-dropdown-item">
                            <a href="shop-list.html">4 Columns List</a>
                        </li>
                        <!-- /MENU DROPDOWN ITEM -->

                        <!-- MENU DROPDOWN ITEM -->
                        <li class="menu-dropdown-item">
                            <a href="#">Product Pages</a>
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow tiny">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->

                            <!-- MENU DROPDOWN -->
                            <ul class="menu-dropdown">
                                <!-- MENU DROPDOWN ITEM -->
                                <li class="menu-dropdown-item">
                                    <a href="product-page-v1.html">Product Page V1</a>
                                </li>
                                <!-- /MENU DROPDOWN ITEM -->

                                <!-- MENU DROPDOWN ITEM -->
                                <li class="menu-dropdown-item">
                                    <a href="product-page-v2.html">Product Page V2</a>
                                </li>
                                <!-- /MENU DROPDOWN ITEM -->
                            </ul>
                            <!-- /MENU DROPDOWN -->
                        </li>
                        <!-- /MENU DROPDOWN ITEM -->
                    </ul>
                    <!-- /MENU DROPDOWN -->
                </li>
                <!-- /MAIN MENU ITEM -->

                <!-- MAIN MENU ITEM -->
                <li class="main-menu-item">
                    <a href="blog.html">Our Blog</a>
                </li>
                <!-- /MAIN MENU ITEM -->

                <!-- MAIN MENU ITEM -->
                <li class="main-menu-item sub">
                    <a href="#">
                        Features
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow face-down">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </a>

                    <!-- CONTENT DROPDOWN -->
                    <div class="content-dropdown with-bg">
                        <!-- CONTENT DROPDOWN COLUMN -->
                        <div class="content-dropdown-column">
                            <h6 class="title tiny secondary">Main Features</h6>
                            <hr class="line-separator">
                            <!-- LINK LIST -->
                            <ul class="link-list simple">
                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="index.html">Trickster Home</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="product-builder-v1.html">Product Builder V1</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="product-builder-v2.html">Product Builder V2</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="blog.html">Trickster Blog</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="post.html">Blog Post</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="contactus.html">Contact Page</a>
                                </li>
                                <!-- /LINK LIST ITEM -->
                            </ul>
                            <!-- /LINK LIST -->

                            <!-- LINK LIST -->
                            <ul class="link-list simple">
                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="404.html">Error Page</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="aboutus.html">About Us</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="menu-dropdowns.html">Menu &amp; DDowns</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="shortcodes.html">Shortcodes</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="login-popup.html">Login Popup</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="ratings-popup.html">Ratings Popup</a>
                                </li>
                                <!-- /LINK LIST ITEM -->
                            </ul>
                            <!-- /LINK LIST -->
                        </div>
                        <!-- /CONTENT DROPDOWN COLUMN -->

                        <!-- CONTENT DROPDOWN COLUMN -->
                        <div class="content-dropdown-column">
                            <h6 class="title tiny secondary">Shop</h6>
                            <hr class="line-separator">
                            <!-- LINK LIST -->
                            <ul class="link-list simple">
                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="shop-sidebar-grid.html">Sidebar 3 Col Grid</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="shop-grid.html">4 Columns Grid</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="shop-sidebar-list.html">Sidebar 3 Col List</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="shop-list.html">4 Columns List</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="product-page-v1.html">Product Page V1</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="product-page-v1.html">Product Page V2</a>
                                </li>
                                <!-- /LINK LIST ITEM -->
                            </ul>
                            <!-- /LINK LIST -->
                        </div>
                        <!-- /CONTENT DROPDOWN COLUMN -->

                        <!-- CONTENT DROPDOWN COLUMN -->
                        <div class="content-dropdown-column">
                            <h6 class="title tiny secondary">Account</h6>
                            <hr class="line-separator">
                            <!-- LINK LIST -->
                            <ul class="link-list simple">
                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="identification.html">Identification</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="billing-shipping.html">Billing and Shipping</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="confirmation.html">Confirmation</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="cart.html">Shopping Cart</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="wishlist.html">Wishlist</a>
                                </li>
                                <!-- /LINK LIST ITEM -->

                                <!-- LINK LIST ITEM -->
                                <li class="link-list-item">
                                    <a href="profile.html">Your Account</a>
                                </li>
                                <!-- /LINK LIST ITEM -->
                            </ul>
                            <!-- /LINK LIST -->
                        </div>
                        <!-- /CONTENT DROPDOWN COLUMN -->
                    </div>
                    <!-- /CONTENT DROPDOWN -->
                </li>
                <!-- /MAIN MENU ITEM -->

                <!-- MAIN MENU ITEM -->
                <li class="main-menu-item">
                    <a href="contactus.html">Contact</a>
                </li>
                <!-- /MAIN MENU ITEM --> --}}
            </ul>
            <!-- /MAIN MENU -->
        </nav>
        <!-- /NAVIGATION -->
    </div>
    <!-- /NAVIGATION WRAP -->
