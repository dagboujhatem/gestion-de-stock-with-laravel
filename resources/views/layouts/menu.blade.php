
<li class="header">
    @lang('models/common.main_navigation')
</li>

<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{{ route('home') }}">
        <i class="fa fa-dashboard"></i>
        <span>Dashboard</span>
    </a>
</li>

@role('Administrator')
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}">
        <i class="fa fa-users"></i>
        <span>Users</span>
    </a>
</li>
@endrole

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}">
        <i class="fa fa-tags"></i>
        <span>@lang('models/categories.plural')</span>
    </a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{{ route('products.index') }}">
        <i class="fa fa-product-hunt"></i>
        <span>@lang('models/products.plural')</span>
    </a>
</li>

<li class="{{ Request::is('profile*') ? 'active' : '' }}">
    <a href="{!! route('profile.edit', Auth::user()->id) !!}">
        <i class="fa fa-users"></i>
        <span>Profile Settings</span>
    </a>
</li>

@role('Administrator')
<li class="{{ Request::is('application*') ? 'active' : '' }}">
    <a href="{!! route('application.index') !!}">
        <i class="fa fa-users"></i>
        <span>Application Settings</span>
    </a>
</li>
@endrole

