 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Route::is('admin.dashboard')? '': 'collapsed' }}" href="{{ route('admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Route::is('admin.user*')? '': 'collapsed' }}" href="{{ route('admin.user.index') }}">
          <i class="bi bi-people"></i>
          <span>Users</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Route::is('admin.blog*')? '': 'collapsed' }}" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
          <i class="bi bi-pin-angle"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="blog-nav" class="nav-content collapse {{ Route::is('admin.blog*')? 'show': '' }}" data-bs-parent="#sidebar-nav" style="">
          <li>
            <a href="{{ route('admin.blog.post.index') }}" class="{{ Route::is('admin.blog.post.index')? 'active': '' }}">
              <i class="bi bi-circle"></i><span>Posts</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.blog.post.create') }}" class="{{ Route::is('admin.blog.post.create')? 'active': '' }}">
              <i class="bi bi-circle"></i><span>Add Post</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.blog.category.index') }}" class="{{ Route::is('admin.blog.category.index')? 'active': '' }}">
              <i class="bi bi-circle"></i><span>Categories</span>
            </a>
          <li>
            <a href="{{ route('admin.blog.category.create') }}" class="{{ Route::is('admin.blog.category.create')? 'active': '' }}">
              <i class="bi bi-circle"></i><span>Add Category</span>
            </a>
          </li>
        </ul>
      </li>

      <li>
        <a class="nav-link {{ Route::is('admin.package*')? '': 'collapsed' }}" data-bs-target="#packages-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-box"></i><span>Packages</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="packages-nav" class="nav-content collapse {{ Route::is('admin.package*')? 'show': '' }}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('admin.packages.index') }}" class="{{ Route::is('admin.packages.index')? 'active': '' }}">
              <i class="bi bi-circle"></i><span>All Packages</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.packages.create') }}" class="{{ Route::is('admin.packages.create')? 'active': '' }}">
              <i class="bi bi-circle"></i><span>Add New</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.package-categories.index') }}" class="{{ Route::is('admin.package-categories.index')? 'active': '' }}">
              <i class="bi bi-circle"></i><span>Categories</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.package-types.index') }}" class="{{ Route::is('admin.package-types.index')? 'active': '' }}">
              <i class="bi bi-circle"></i><span>Types</span>
            </a>
          </li>
        </ul>
      </li><!-- End Packages Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Route::is('admin.faqs')? '': 'collapsed' }}" href="{{ route('admin.faqs.index') }}">
          <i class="bi bi-menu-button-wide"></i>
          <span>FAQ's</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::is('admin.profile')? '': 'collapsed' }}" href="{{ route('admin.profile') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.logout') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside>