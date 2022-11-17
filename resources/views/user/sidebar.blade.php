<div class="blog-sidebar">
  <!--search-->
  <div class="sidebar-search">
    <ul class="list-group">
      <a href="{{ route('user-dashboard') }}"><li class="list-group-item"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</li></a>
      <a href="{{ route('user-profile') }}"><li class="list-group-item"><i class="fa fa-user" aria-hidden="true"></i> My Profile</li></a>
      <a href="{{ route('user-change-password') }}"><li class="list-group-item"><i class="fa fa-lock" aria-hidden="true"></i> Change Password</li></a>
      <a href="{{ route('user-orders') }}"><li class="list-group-item"><i class="fa fa-list" aria-hidden="true"></i> Review Order</li></a>
      <a href="{{ route('user-logout') }}"><li class="list-group-item"><i class="fa fa-unlock" aria-hidden="true"></i> Logout</li></a>
    </ul>
  </div>
</div>