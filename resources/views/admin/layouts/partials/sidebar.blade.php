<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('admin/assets/images/logo/logo.png')}}" alt="Logo"
                                              srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{Request::path() === 'admin/dashboard' ? 'active' : null}}">
                    <a href="{{route('admin.dashboard.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{Request::path() === 'admin/categories' ? 'active' : null}} ">
                    <a href="{{route('admin.categories.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Categories </span>
                    </a>
                </li>
                <li class="sidebar-item {{Request::path() === 'admin/products' ? 'active' : null}} ">
                    <a href="{{route('admin.products.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Products </span>
                    </a>
                </li>
                <li class="sidebar-item {{Request::path() === 'admin/users' ? 'active' : null}} ">
                    <a href="{{route('admin.users.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Users </span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
