 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Route::is('admin.dashboard')? '': 'collapsed' }}" href="{{ route('admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
          <i class="bi bi-journal-text"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse {{ Route::is('admin.blog.category.index')? 'show': '' }} {{ Route::is('admin.blog.category.create')? 'show': '' }} {{ Route::is('admin.blog.category.edit')? 'show': '' }} {{ Route::is('admin.blog.post.index')? 'show': '' }} {{ Route::is('admin.blog.post.create')? 'show': '' }} {{ Route::is('admin.blog.post.edit')? 'show': '' }}" data-bs-parent="#sidebar-nav" style="">
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
          </li>
          <li>
            <a href="{{ route('admin.blog.category.create') }}" class="{{ Route::is('admin.blog.category.create')? 'active': '' }}">
              <i class="bi bi-circle"></i><span>Add Category</span>
            </a>
          </li>
        </ul>
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