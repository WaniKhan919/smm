<li><a href="#">Blog</a>
    <ul class="submenu">
        @foreach ($blog_categories as $blog_category)
            <li><a href="{{ route('blog',$blog_category->id) }}">{{ $blog_category->title }}</a></li>
        @endforeach
    </ul>
</li>