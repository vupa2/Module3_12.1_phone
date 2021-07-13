<div class="slimscroll-menu">
    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul class="metismenu" id="side-menu">

            <li class="menu-title">Navigation</li>
            <li>
                <a href="javascript: void(0);">
                    <i class="dripicons-view-thumb"></i>
                    <span> Products </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level mm-collapse" aria-expanded="false">
                    <li><a href="{{ route('admin.products.index') }}">List</a></li>
                    <li><a href="{{ route('admin.products.create') }}">Create</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);">
                    <i class="dripicons-view-thumb"></i>
                    <span> Brands </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level mm-collapse" aria-expanded="false">
                    <li><a href="{{ route('admin.brands.index') }}">List</a></li>
                    <li><a href="{{ route('admin.brands.create') }}">Create</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);">
                    <i class="dripicons-view-thumb"></i>
                    <span> Categories </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level mm-collapse" aria-expanded="false">
                    <li><a href="{{ route('admin.categories.index') }}">List</a></li>
                    <li><a href="{{ route('admin.categories.create') }}">Create</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->
