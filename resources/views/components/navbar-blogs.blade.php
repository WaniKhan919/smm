<li><a href="javascript:void(0)">Blog</a>
    <ul class="submenu sub-2">
        @foreach ($blog_categories as $blog_category)
            <li><a href="{{ route('blog',$blog_category->id) }}">{{ $blog_category->title }}</a></li>
        @endforeach
    </ul>
</li>