@php
    use App\Models\ServicePackageCategory as Category;
@endphp
    {{-- <li>
        <a href="#">Services</a>
        <ul class="submenu"> --}}
            @foreach ($services as $service)

                @if ($service->categories()->count()!=0)
                
                @php
                
                    $category = Category::where('service_id', $service->id)->first();

                @endphp
                    
                <li><a href="{{ url('/service/category/'.$service->categories()->first()->id) }}">{{ $service->name }}</a>
                        <ul class="submenu">
                            
                            @foreach ($service->categories as $category)
                                <li><a href="{{ route('service-category',$category->id) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                </li>
                @else

                <li><a href="">{{ $service->name }}</a>

                @endif
            @endforeach
        {{-- </ul>
    </li> --}}