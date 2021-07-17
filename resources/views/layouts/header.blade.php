<header class="top_panel_wrap top_panel_style_3 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
        <div class="top_panel_middle">
            <div class="content_wrap">
                <div class="contact_logo">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('template/images/logo.png')}}" class="logo_main" alt="" width="128" height="124">
                            <img src="{{asset('template/images/alternative-logo.png')}}" class="logo_fixed" alt="" width="161" height="47">
                        </a>
                    </div>
                </div>
                <div class="menu_main_wrap">
                    <a href="#" class="menu_main_responsive_button icon-menu"></a>
                    <nav class="menu_main_nav_area">
                        <ul id="menu_main" class="menu_main_nav">
                            <li class="menu-item" data-menu="home"><a href="{{route('home')}}">Home</a></li>
                            <li class="menu-item menu-item-has-children" data-menu="table"><a href="#">Reservations</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{route('table')}}">Tables Scheme</a></li>
                                </ul>
                            </li>
                            <li class="menu-item" data-menu="menu"><a href="{{route('menu')}}">Menu</a></li>
                            <li class="menu-item menu-item-has-children" data-menu="blog"><a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="blog-sidebar.html">Blog With Sidebar</a></li>
                                    <li class="menu-item"><a href="{{route('blog')}}">Blog Without Sidebar</a></li>
                                    <li class="menu-item menu-item-has-children"><a href="#">Blog Masonry</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="masonry-2-columns.html">Masonry 2 Columns</a></li>
                                            <li class="menu-item"><a href="masonry-3-columns.html">Masonry 3 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="post-formats.html">Post Formats</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="#">Features</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children"><a href="#">Tools</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="support.html">Support</a></li>
                                            <li class="menu-item"><a href="customization.html">Customization</a></li>
                                            <li class="menu-item"><a href="video.html">Video Tutorials</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="{{route('about')}}">About Us</a></li>
                                    <li class="menu-item"><a href="team.html">Our Team</a></li>
                                    <li class="menu-item"><a href="single-team.html">Team member</a></li>
                                    <li class="menu-item"><a href="clients.html">Our Clients</a></li>
                                    <li class="menu-item"><a href="testimonials.html">Testimonials</a></li>
                                    <li class="menu-item"><a href="typography.html">Typography</a></li>
                                    <li class="menu-item"><a href="shortcodes.html">Shortcodes</a></li>
                                    <li class="menu-item menu-item-has-children"><a href="#">Gallery</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="cobbles.html">Cobbles</a></li>
                                            <li class="menu-item"><a href="grid.html">Grid</a></li>
                                            <li class="menu-item"><a href="masonry.html">Masonry</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="{{route('shop')}}">Shop</a></li>
                            <li class="menu-item"><a href="{{route('contact')}}">Contacts</a></li>
                        </ul>
                    </nav>
                    <div class="contact_cart">
                        <a href="{{route('cart')}}" class="top_panel_cart_button" data-items="0" data-summa="&#036;0.00">
                            <span class="contact_icon icon-shopping"></span>
                            <span class="contact_label contact_cart_label">Your cart:</span>
                            <span class="contact_cart_totals">
		                                <span class="cart_items">0 Items</span> -
                                        <span class="cart_summa">&#36;0.00</span>
                                    </span>
                        </a>
                        <ul class="widget_area sidebar_cart sidebar">
                            <li>
                                <div class="widget woocommerce widget_shopping_cart">
                                    <div class="hide_cart_widget_if_empty">
                                        <div class="widget_shopping_cart_content">
                                            <ul class="cart_list product_list_widget ">
                                                <li class="empty">No products in the cart.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="{{route('shop')}}">Continue Shopping</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
