<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li class="{{ Request::is('admin') ? 'active' : '' }}">
      <a href="{{url('admin')}}">Dashboard</a>
    </li>
    <li class="{{ Request::is('admin/order*') ? 'active' : '' }}">
      <a href="">Orders</a>
    </li>
    <li class="{{ Request::is('admin/products*') ? 'active' : '' }}">
      <a href="">Products</a>
    </li>
    <li class="{{ Request::is('admin/categories*') ? 'active' : '' }}">
      <a href="">Categories</a>
    </li>
    <li class="{{ Request::is('admin/news*') ? 'active' : '' }}">
      <a href="">Blog</a>
    </li>
    <li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
      <a href="">Users</a>
    </li>
  </ul>
</div>
