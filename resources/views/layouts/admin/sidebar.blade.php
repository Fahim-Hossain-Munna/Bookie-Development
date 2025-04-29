<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a class='logo logo-metrica d-block text-center' href='index.html'>
            <span>
                <img src="{{ asset('backend') }}/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
            </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard"
                        data-bs-trigger="hover">
                        <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                            <i class="ti ti-smart-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Category"
                        data-bs-trigger="hover">
                        <a href="#MetricaApps" id="apps-tab" class="nav-link">
                            <i class="ti ti-clipboard-list menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Tag"
                        data-bs-trigger="hover">
                        <a href="#MetricaUikit" id="uikit-tab" class="nav-link">
                            <i class="ti ti-tag menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blogs"
                        data-bs-trigger="hover">
                        <a href="#MetricaPages" id="pages-tab" class="nav-link">
                            <i class="ti ti-news menu-icon"></i>
                        </a>
                    </li>

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Size & Color"
                        data-bs-trigger="hover">
                        <a href="#Metricasizecolor" id="authentication-tab" class="nav-link">
                            <i class="ti ti-color-picker menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Products"
                        data-bs-trigger="hover">
                        <a href="#Metricaproduct" id="authentication-tab" class="nav-link">
                            <i class="ti ti-building-store menu-icon"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="pro-metrica-end">
            @if (auth()->user()->image == 'default.png')
                <a href="{{ route('settings.index') }}" class="profile">
                    <img src="{{ asset('uploads/default') }}/{{ auth()->user()->image }}" alt="profile-user"
                        class="rounded-circle thumb-sm">
                </a>
            @else
                <a href="{{ route('settings.index') }}" class="profile">
                    <img src="{{ asset('uploads/profile') }}/{{ auth()->user()->image }}" alt="profile-user"
                        class="rounded-circle thumb-sm">
                </a>
            @endif
        </div>
    </div>
    <!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a class='logo' href='{{ route('dashboard') }}'>
                <span>
                    <h3 class="text-dark">Bookie</h3>
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-body navbar-vertical tab-content" data-simplebar>
            <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Dashboard</h6>
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class='nav-link' target="_blank" href='{{ route('home') }}'>Bookie - (Webpage)</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link' href='{{ route('dashboard') }}'>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link' href='{{ route('settings.index') }}'>Profile / Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link' href=''>New Role Assign</a>
                    </li>
                </ul>
            </div>

            <div id="MetricaApps" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="apps-tab">
                <div class="title-box">
                    <h6 class="menu-title">Category</h6>
                </div>

                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarAnalytics">
                                Lists
                            </a>
                            <div class="collapse " id="sidebarAnalytics">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class='nav-link ' href='{{ route('category.index') }}'>Show
                                            Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link ' href='{{ route('category.create') }}'>Create
                                            Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link ' href='{{ route('category.trash') }}'>Categories
                                            Trash</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="MetricaUikit" class="main-icon-menu-pane  tab-pane" role="tabpanel"
                aria-labelledby="uikit-tab">
                <div class="title-box">
                    <h6 class="menu-title">Tag</h6>
                </div>
                <div class="collapse navbar-collapse" id="sidebarCollapse_2">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarElements">
                                Lists
                            </a>
                            <div class="collapse " id="sidebarElements">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('tag.index') }}'>Show Tags</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('tag.create') }}'>Create Tags</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('tag.trash') }}'>Tags Trash</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div id="MetricaPages" class="main-icon-menu-pane  tab-pane" role="tabpanel"
                aria-labelledby="uikit-tab">
                <div class="title-box">
                    <h6 class="menu-title">Blogs</h6>
                </div>
                <div class="collapse navbar-collapse" id="sidebarCollapse_2">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarElementsblog" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarElementsblog">
                                Lists
                            </a>
                            <div class="collapse " id="sidebarElementsblog">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('blog.index') }}'>Show Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('blog.create') }}'>Create Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('blog.trash') }}'>Blogs Trash</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div id="Metricasizecolor" class="main-icon-menu-pane  tab-pane" role="tabpanel"
                aria-labelledby="uikit-tab">
                <div class="title-box">
                    <h6 class="menu-title">Size & Color</h6>
                </div>
                <div class="collapse navbar-collapse" id="sidebarCollapse_2">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarElementsblog" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarElementsblog">
                                Lists
                            </a>
                            <div class="collapse " id="sidebarElementsblog">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('size&color.index') }}'>Show Size &
                                            Color</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('size&color.trash') }}'>Size & Color
                                            Trash</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div id="Metricaproduct" class="main-icon-menu-pane  tab-pane" role="tabpanel"
                aria-labelledby="uikit-tab">
                <div class="title-box">
                    <h6 class="menu-title">Products</h6>
                </div>
                <div class="collapse navbar-collapse" id="sidebarCollapse_2">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarElementsblog" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarElementsblog">
                                Lists
                            </a>
                            <div class="collapse " id="sidebarElementsblog">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('product.index') }}'>Show Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('product.trash') }}'>Products
                                            Trash</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!--end menu-body-->
    </div>

</div>


{{-- <div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a class='logo logo-metrica d-block text-center' href='index.html'>
            <span>
                <img src="{{ asset('backend') }}/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
            </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-relative h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard"
                        data-bs-trigger="hover">
                        <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link" data-bs-toggle="tab">
                            <i class="ti ti-smart-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Category"
                        data-bs-trigger="hover">
                        <a href="#MetricaApps" id="apps-tab" class="nav-link" data-bs-toggle="tab">
                            <i class="ti ti-clipboard-list menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Tag"
                        data-bs-trigger="hover">
                        <a href="#MetricaUikit" id="uikit-tab" class="nav-link" data-bs-toggle="tab">
                            <i class="ti ti-tag menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blogs"
                        data-bs-trigger="hover">
                        <a href="#MetricaPages" id="pages-tab" class="nav-link" data-bs-toggle="tab">
                            <i class="ti ti-news menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Size & Color"
                        data-bs-trigger="hover">
                        <a href="#Metricasizecolor" id="sizecolor-tab" class="nav-link" data-bs-toggle="tab">
                            <i class="ti ti-color-picker menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Products"
                        data-bs-trigger="hover">
                        <a href="#Metricaproduct" id="product-tab" class="nav-link" data-bs-toggle="tab">
                            <i class="ti ti-building-store menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pro-metrica-end">
            @if (auth()->user()->image == 'default.png')
                <a href="{{ route('settings.index') }}" class="profile">
                    <img src="{{ asset('uploads/default') }}/{{ auth()->user()->image }}" alt="profile-user"
                        class="rounded-circle thumb-sm">
                </a>
            @else
                <a href="{{ route('settings.index') }}" class="profile">
                    <img src="{{ asset('uploads/profile') }}/{{ auth()->user()->image }}" alt="profile-user"
                        class="rounded-circle thumb-sm">
                </a>
            @endif
        </div>
    </div>

    <div class="main-menu-inner">
        <div class="topbar-left">
            <a class='logo' href='{{ route('dashboard') }}'>
                <span>
                    <h3 class="text-dark">Bookie</h3>
                </span>
            </a>
        </div>

        <div class="menu-body navbar-vertical tab-content" data-simplebar>

            <!-- Dashboard Tab -->
            <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane fade" role="tabpanel"
                aria-labelledby="dashboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Dashboard</h6>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class='nav-link' target="_blank" href='{{ route('home') }}'>Bookie -
                            (Webpage)</a></li>
                    <li class="nav-item"><a class='nav-link' href='{{ route('dashboard') }}'>Home</a></li>
                    <li class="nav-item"><a class='nav-link' href='{{ route('settings.index') }}'>Profile /
                            Settings</a></li>
                    <li class="nav-item"><a class='nav-link' href=''>New Role Assign</a></li>
                </ul>
            </div>

            <!-- Category Tab -->
            <div id="MetricaApps" class="main-icon-menu-pane tab-pane fade" role="tabpanel"
                aria-labelledby="apps-tab">
                <div class="title-box">
                    <h6 class="menu-title">Category</h6>
                </div>
                <div class="accordion" id="accordionCategory">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingCategory">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseCategory" aria-expanded="false"
                                aria-controls="collapseCategory">
                                Lists
                            </button>
                        </h2>
                        <div id="collapseCategory" class="accordion-collapse collapse"
                            aria-labelledby="headingCategory" data-bs-parent="#accordionCategory">
                            <div class="accordion-body">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class='nav-link'
                                            href='{{ route('category.index') }}'>Show Category</a></li>
                                    <li class="nav-item"><a class='nav-link'
                                            href='{{ route('category.create') }}'>Create Category</a></li>
                                    <li class="nav-item"><a class='nav-link'
                                            href='{{ route('category.trash') }}'>Categories Trash</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tag Tab -->
            <div id="MetricaUikit" class="main-icon-menu-pane tab-pane fade" role="tabpanel"
                aria-labelledby="uikit-tab">
                <div class="title-box">
                    <h6 class="menu-title">Tag</h6>
                </div>
                <div class="accordion" id="accordionTag">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTag">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTag" aria-expanded="false" aria-controls="collapseTag">
                                Lists
                            </button>
                        </h2>
                        <div id="collapseTag" class="accordion-collapse collapse" aria-labelledby="headingTag"
                            data-bs-parent="#accordionTag">
                            <div class="accordion-body">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class='nav-link' href='{{ route('tag.index') }}'>Show
                                            Tags</a></li>
                                    <li class="nav-item"><a class='nav-link' href='{{ route('tag.create') }}'>Create
                                            Tags</a></li>
                                    <li class="nav-item"><a class='nav-link' href='{{ route('tag.trash') }}'>Tags
                                            Trash</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blogs Tab -->
            <div id="MetricaPages" class="main-icon-menu-pane tab-pane fade" role="tabpanel"
                aria-labelledby="pages-tab">
                <div class="title-box">
                    <h6 class="menu-title">Blogs</h6>
                </div>
                <div class="accordion" id="accordionBlog">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingBlog">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseBlog" aria-expanded="false" aria-controls="collapseBlog">
                                Lists
                            </button>
                        </h2>
                        <div id="collapseBlog" class="accordion-collapse collapse" aria-labelledby="headingBlog"
                            data-bs-parent="#accordionBlog">
                            <div class="accordion-body">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class='nav-link' href='{{ route('blog.index') }}'>Show
                                            Blogs</a></li>
                                    <li class="nav-item"><a class='nav-link'
                                            href='{{ route('blog.create') }}'>Create Blogs</a></li>
                                    <li class="nav-item"><a class='nav-link' href='{{ route('blog.trash') }}'>Blogs
                                            Trash</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Size & Color Tab -->
            <div id="Metricasizecolor" class="main-icon-menu-pane tab-pane fade" role="tabpanel"
                aria-labelledby="sizecolor-tab">
                <div class="title-box">
                    <h6 class="menu-title">Size & Color</h6>
                </div>
                <div class="accordion" id="accordionSizeColor">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSizeColor">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSizeColor" aria-expanded="false"
                                aria-controls="collapseSizeColor">
                                Lists
                            </button>
                        </h2>
                        <div id="collapseSizeColor" class="accordion-collapse collapse"
                            aria-labelledby="headingSizeColor" data-bs-parent="#accordionSizeColor">
                            <div class="accordion-body">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class='nav-link'
                                            href='{{ route('size&color.index') }}'>Show Size & Color</a></li>
                                    <li class="nav-item"><a class='nav-link'
                                            href='{{ route('size&color.trash') }}'>Size & Color Trash</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Tab -->
            <div id="Metricaproduct" class="main-icon-menu-pane tab-pane fade" role="tabpanel"
                aria-labelledby="product-tab">
                <div class="title-box">
                    <h6 class="menu-title">Products</h6>
                </div>
                <div class="accordion" id="accordionProduct">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingProduct">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseProduct" aria-expanded="false"
                                aria-controls="collapseProduct">
                                Lists
                            </button>
                        </h2>
                        <div id="collapseProduct" class="accordion-collapse collapse"
                            aria-labelledby="headingProduct" data-bs-parent="#accordionProduct">
                            <div class="accordion-body">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class='nav-link'
                                            href='{{ route('product.index') }}'>Show Products</a></li>
                                    <li class="nav-item"><a class='nav-link'
                                            href='{{ route('product.trash') }}'>Products Trash</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> --}}
