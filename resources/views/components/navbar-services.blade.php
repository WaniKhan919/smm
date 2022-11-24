
    {{-- <li>
        <a href="#">Services</a>
        <ul class="submenu"> --}}
            @foreach ($services as $service)
                @php
                    if($service->categories()->count()<1){
                        $plus=false;
                    }else{
                        $plus=true;
                    }
                @endphp
                <li><a href="{{ $plus === true? 'javascript:void(0)': route('service', $service->id) }}">{{ $service->name }}@if ($plus==true)
                    {{-- <i class="icon_plus"></i> --}}
                @endif</a>
                    @if ($plus === true)
                        <ul class="submenu">
                            
                            @foreach ($service->categories as $category)
                                <li><a href="{{ route('service-category',$category->id) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        {{-- </ul>
    </li> --}}