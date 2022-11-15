 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Route::is('admin.dashboard')? '': 'collapsed' }}" href="{{ route('admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Route::is('admin.package*')? '': 'collapsed' }}" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-box"></i><span>Packages</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse {{ Route::is('admin.package*')? 'show': '' }}" data-bs-parent="#sidebar-nav">
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
        <a class="nav-link {{ Route::is('admin.dashboard.profile')? '': 'collapsed' }}" href="{{ route('admin.dashboard.profile') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside>