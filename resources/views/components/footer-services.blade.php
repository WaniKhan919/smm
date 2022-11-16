<div class="col-lg-3 col-sm-6">
    <div class="footer-widget mt-sm-35">
        <div class="footer-widget-title">
            <h4><span>Packages</span></h4>
        </div>
        <ul class="list-none">
            @foreach ($packages as $list)
                <li><a href="{{ route('service-category',$list->id) }}">{{  $list->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>