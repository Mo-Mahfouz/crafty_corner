<div class="col-md-2 sidebar p-3">
    <a href="{{ route('dashboard.index') }}"
        class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}">Orders</a>
    <a href="{{ route('dashboard.activity_logs') }}"
        class="{{ request()->routeIs('dashboard.activity_logs') ? 'active' : '' }}">Activity Logs</a>
    <a href="{{ route('dashboard.account') }}"
        class="{{ request()->routeIs('dashboard.account') ? 'active' : '' }}">Account</a>
    <a href="{{ route('dashboard.products.create') }}"
        class="{{ request()->routeIs('dashboard.products.create') ? 'active' : '' }}">Add Product</a>
    <a href="{{ route('dashboard.products.index') }}"
        class="{{ request()->routeIs('dashboard.products.index') ? 'active' : '' }}">All Products</a>
    <a href="{{ route('dashboard.users.index') }}"
        class="{{ request()->routeIs('dashboard.users.*') ? 'active' : '' }}">Users</a>
    <a href="{{ route('dashboard.contacts.index') }}"
        class="{{ request()->routeIs('dashboard.contacts.*') ? 'active' : '' }}">Contact</a>
    <div class="mt-5">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn text-danger w-100 text-start">Sign Out</button>
        </form>
    </div>
</div>