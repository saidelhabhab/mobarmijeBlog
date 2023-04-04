<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active':'' }}" href="{{ route('dashboardAdmin')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>

                  <!-- --------------------------------------------- -->
                <a class="nav-link {{ Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit_category/*')  ? 'collapse active':'collapsed' }} " href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse  {{ Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit_category/*') ? 'show':'' }}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-category') ? 'active':'' }}" href="{{ route('add-category')}}">Add Category</a>
                        <a class="nav-link {{ Request::is('admin/category') || Request::is('admin/edit_category/*') ? 'active':'' }}" href="{{ route('category')}}">View Category</a>
                    </nav>
                </div>

                <!-- --------------------------------------------- -->

                <a class="nav-link  {{ Request::is('admin/post') || Request::is('admin/add-post') || Request::is('admin/edit_post/*') ? 'collapse active ':'collapsed' }} " href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Post
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse  {{ Request::is('admin/post') || Request::is('admin/add-post') || Request::is('admin/edit_post/*') ? 'show':'' }}" id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-post') ? 'active':'' }}" href="{{ route('add-post')}}">Add Post</a>
                        <a class="nav-link {{ Request::is('admin/post') || Request::is('admin/edit_post/*') ? 'active':'' }}" href="{{ route('post')}}">View Post</a>
                    </nav>
                </div>

                <!-- --------------------------------------------- -->

                <a class="nav-link  {{ Request::is('admin/videos') || Request::is('admin/add-video') || Request::is('admin/edit_video/*') ? 'collapse active ':'collapsed' }} " href="#" data-bs-toggle="collapse" data-bs-target="#collapseVideos" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Video
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse  {{ Request::is('admin/videos') || Request::is('admin/add-video') || Request::is('admin/edit_video/*') ? 'show':'' }}" id="collapseVideos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-video') ? 'active':'' }}" href="{{ route('add-video')}}">Add Video</a>
                        <a class="nav-link {{ Request::is('admin/videos') || Request::is('admin/edit_video/*') ? 'active':'' }}" href="{{ route('videos')}}">View Videos</a>
                    </nav>
                </div>

                  <!-- --------------------------------------------- -->

                <a class="nav-link {{ Request::is('admin/users') ? 'active':'' }}" href="{{ route('users')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                </a>

                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="{{route('settings')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Settings
                </a>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
