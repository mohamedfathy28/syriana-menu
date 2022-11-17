<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>@lang('site.categories')</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('products.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>@lang('site.products')</p>
                    </a>
                </li>
                
                  <li class="nav-item has-treeview">
                    <a href="{{ route('setting') }}" class="nav-link">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>@lang('site.setting')</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('menu') }}" class="nav-link">
                        <i class="nav-icon fas fa-th-large"></i>
                        <p>@lang('site.preview_menu')</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>@lang('site.logout')</p>
                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
