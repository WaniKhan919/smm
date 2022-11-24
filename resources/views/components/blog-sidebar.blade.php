<div class="blog-sidebar">
    <!--search-->
    <form action="{{ route('blog-search') }}" method="POST">
        @csrf
        <div class="sidebar-search">
            <input type="text" placeholder="Search" name="search" required/>
            <button type="submit"><i class="icon_search"></i></button>
        </div>
    </form>
    <!--category-->
    <div class="sidebar-category mt-65 mt-sm-50">
      <h4 class="sidebar-title"><span>Categories</span></h4>
      <ul class="list-none">
        @foreach ($blog_categories as $category)
            <li><a href="{{ route('blog',$category->id) }}">{{  $category->title }}</a></li>
        @endforeach
      </ul>
    </div>
    <!--recent-posts-->
    <div class="popular-posts mt-55 mt-sm-40">
      <h4 class="sidebar-title"><span>Recent Posts</span></h4>
      <ul class="list-none">
        @foreach ($blogs as $list)
            <li class="d-table">
                <div class="popular-thumb table-cell">
                <a href="{{ route('blog-detail',$list->id) }}"><img src="{{asset('/assets/admin/img/post/'.$list->img)}}" alt="" /></a>
                </div>
                <div class="popular-desc table-cell">
                <h4><a href="{{ route('blog-detail',$list->id) }}">
                  @if (strlen($list->title) > 57)
                    {{ Str::substr($list->title, 0, 54) }}...
                  @else
                    {{ $list->title }}
                  @endif
                </a></h4>
                <small><i class="fa fa-clock-o"></i> 18th Jan, 2020</small>
                </div>
            </li>
        @endforeach
      </ul>
    </div>
  </div>