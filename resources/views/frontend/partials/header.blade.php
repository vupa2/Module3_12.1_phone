    <!-- WIDGET LINE WRAP -->
    <div class="widget-line-wrap widget-line-1">
        <!-- WIDGET LINE -->
        <div class="widget-line">
            {{-- <!-- ACTIONS LIST -->
            <ul class="actions-list left">
                <!-- ACTIONS LIST ITEM -->
                <li class="actions-list-item">
                    <!-- SOCIAL LINK -->
                    <div class="social-link">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                    <!-- /SOCIAL LINK -->
                </li>
                <!-- ACTIONS LIST ITEM -->

                <!-- ACTIONS LIST ITEM -->
                <li class="actions-list-item">
                    <!-- SOCIAL LINK -->
                    <div class="social-link">
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <!-- /SOCIAL LINK -->
                </li>
                <!-- ACTIONS LIST ITEM -->

                <!-- ACTIONS LIST ITEM -->
                <li class="actions-list-item">
                    <!-- SOCIAL LINK -->
                    <div class="social-link">
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                    <!-- /SOCIAL LINK -->
                </li>
                <!-- ACTIONS LIST ITEM -->

                <!-- ACTIONS LIST ITEM -->
                <li class="actions-list-item">
                    <!-- SOCIAL LINK -->
                    <div class="social-link">
                        <a href="#">
                            <i class="fa fa-rss"></i>
                        </a>
                    </div>
                    <!-- /SOCIAL LINK -->
                </li>
                <!-- ACTIONS LIST ITEM -->

                <!-- ACTIONS LIST ITEM -->
                <li class="actions-list-item">
                    <!-- SOCIAL LINK -->
                    <div class="social-link">
                        <a href="#">
                            <i class="fa fa-vimeo"></i>
                        </a>
                    </div>
                    <!-- /SOCIAL LINK -->
                </li>
                <!-- ACTIONS LIST ITEM -->
            </ul>
            <!-- ACTIONS LIST --> --}}

            <!-- ACTIONS LIST -->
            <ul class="actions-list right">
                {{-- <!-- ACTIONS LIST ITEM -->
                <li class="actions-list-item">
                    <a class="action-button options-dropdown dropdown-control click-closable" href="#">
                        <span class="language-selected-option">eng</span>
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow small face-down">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </a>

                    <!-- DROPDOWN LIST -->
                    <ul class="dropdown-list dropdown">
                        <li data-language="eng" class="dropdown-list-item language-option selected">
                            <a href="#">eng</a>
                        </li>
                        <li data-language="spa" class="dropdown-list-item language-option">
                            <a href="#">spa</a>
                        </li>
                        <li data-language="ger" class="dropdown-list-item language-option">
                            <a href="#">ger</a>
                        </li>
                    </ul>
                    <!-- /DROPDOWN LIST -->
                </li>
                <!-- ACTIONS LIST ITEM -->

                <!-- ACTIONS LIST ITEM -->
                <li class="actions-list-item">
                    <a class="action-button options-dropdown dropdown-control click-closable" href="#">
                        <span class="currency-selected-option">usd</span>
                        <!-- SVG ARROW -->
                        <svg class="svg-arrow small face-down">
                            <use xlink:href="#svg-arrow"></use>
                        </svg>
                        <!-- /SVG ARROW -->
                    </a>

                    <!-- DROPDOWN LIST -->
                    <ul class="dropdown-list dropdown">
                        <li data-currency="usd" class="dropdown-list-item currency-option selected">
                            <a href="#">usd</a>
                        </li>
                        <li data-currency="euro" class="dropdown-list-item currency-option">
                            <a href="#">euro</a>
                        </li>
                    </ul>
                    <!-- /DROPDOWN LIST -->
                </li>
                <!-- ACTIONS LIST ITEM --> --}}

                <!-- ACTIONS LIST ITEM -->
                @auth
                    {{-- <li class="actions-list-item">
                        <a class="action-button" href="wishlist.html">Wishlist<span class="bold">4</span></a>
                    </li> --}}
                    {{-- <li class="actions-list-item">
                        <a class="action-button" href="{{ route('home') }}">My Account</a>
                    </li> --}}
                    <li class="actions-list-item">
                        <a class="action-button" href="{{ route('home') }}">My Admin</a>
                    </li>
                    <li class="actions-list-item">
                        <a class="action-button regular" href="" onclick=" event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="actions-list-item">
                        <a class="action-button " href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="actions-list-item">
                        <a class="action-button" href="{{ route('login') }}">Login</a>
                    </li>
                @endauth

                <!-- ACTIONS LIST ITEM -->
                <li class="actions-list-item">
                    {{-- <!-- SEARCH FORM -->
                    <form class="search-form">
                        <input type="text" name="search" autocomplete="off" placeholder="Search products here...">
                        <!-- SEARCH SUBMIT -->
                        <div class="search-submit">
                            <!-- SVG MAG GLASS -->
                            <svg class="svg-mag-glass">
                                <use xlink:href="#svg-mag-glass"></use>
                            </svg>
                            <!-- /SVG MAG GLASS -->
                        </div>
                        <!-- /SEARCH SUBMIT -->

                        <!-- SEARCH CANCEL -->
                        <div class="search-cancel hidden">
                            <!-- SVG CROSS -->
                            <svg class="svg-cross">
                                <use xlink:href="#svg-cross"></use>
                            </svg>
                            <!-- /SVG CROSS -->
                        </div>
                        <!-- /SEARCH CANCEL -->
                    </form>
                    <!-- /SEARCH FORM --> --}}
                </li>
                <!-- ACTIONS LIST ITEM -->
            </ul>
            <!-- ACTIONS LIST -->
        </div>
        <!-- WIDGET LINE -->
    </div>
    <!-- WIDGET LINE WRAP -->
