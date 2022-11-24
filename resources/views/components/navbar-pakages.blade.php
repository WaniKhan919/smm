<li><a href="#">Packages</a>
    <ul class="submenu">
       @foreach ($pakages as $pakage)
        <li><a href="{{ route('pricing') }}">{{ $pakage->title }}</a></li>
       @endforeach
    </ul>
</li>