
<li class="header">
    @lang('models/common.main_navigation')
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}">
        <i class="fa fa-users"></i>
        <span>Users</span>
    </a>
</li>

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

