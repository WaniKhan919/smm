
    {{-- <li>
        <a href="#">Services</a>
        <ul class="submenu"> --}}
            @foreach ($categories as $list)
            @php
                $types=DB::table('package_types')->where('category_id',$list->id)->get();
                if(count($types)<1){
                    $plus=false;
                }else{
                    $plus=true;
                }
            @endphp
                <li><a href="javascript:void(0)">{{ $list->name }}@if ($plus==true)
                    {{-- <i class="icon_plus"></i> --}}
                @endif</a>
                    <ul class="submenu">
                        
                        @foreach ($types as $type)
                            <li><a href="{{ route('service-category',$type->id) }}">{{ $type->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        {{-- </ul>
    </li> --}}