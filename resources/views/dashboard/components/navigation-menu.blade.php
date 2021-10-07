<div class="sidebar-body">
    <ul class="nav">
        <li class="nav-item nav-category">{{ __('navigation.menu_main') }}</li>
        <li class="nav-item {{ (request()->is('admin')) ? 'active' : '' }}">
            <a href="{{ route('dashboard.home') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">{{ __('navigation.menu_dashboard') }}</span>
            </a>
        </li>
        <li class="nav-item {{ (request()->is('admin/categories')) ? 'active' : '' }}">
            <a href="{{ route('dashboard.categories') }}" class="nav-link">
                <i class="link-icon" data-feather="list"></i>
                <span class="link-title">{{ __('navigation.menu_categories') }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tools" role="button" aria-expanded="false"
                aria-controls="tools">
                <i class="link-icon" data-feather="archive"></i>
                <span class="link-title">{{ __('navigation.menu_products') }}</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="tools">
                <ul class="nav sub-menu">
                    <li class="nav-item {{ (request()->is('admin/products')) ? 'active' : '' }}">
                        <a href="{{ route('dashboard.products') }}" class="nav-link">{{ __('navigation.menu_products') }}</a>
                    </li>
                    <li class="nav-item {{ (request()->is('admin/brand')) ? 'active' : '' }}">
                        <a href="{{ route('dashboard.brand') }}" class="nav-link">{{ __('navigation.menu_brand') }}</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ (request()->is('admin/settings')) ? 'active' : '' }}">
            <a href="{{ route('dashboard.settings') }}" class="nav-link">
                <i class="link-icon" data-feather="settings"></i>
                <span class="link-title">{{ __('navigation.menu_settings') }}</span>
            </a>
        </li>
    </ul>
</div>