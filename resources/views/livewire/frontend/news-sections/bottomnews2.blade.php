<div class="col-sm-4 p-b-25">
    <div class="how2 how2-cl5 flex-sb-c mb-4 bg-white">
        <h3 class="f1-m-2 cl17 tab01-title">
            @if (session()->get('language') === 'hindi')
                        {{ $get_bottom2_Menus->category_hin  ?? "NA"}}
            @elseif (session()->get('language') === 'english')
                        {{ $get_bottom2_Menus->category_en  ?? "NA"}}
            @elseif (session()->get('language') === 'punjabi')
                        {{ $get_bottom2_Menus->category_pbi ?? "NA"}}
            @elseif (session()->get('language') === 'urdu')
                        {{ $get_bottom2_Menus->category_urdu ?? "NA"}}
            @else   
                        {{ $get_bottom2_Menus->category_en  ?? "NA"}}
            @endif
        </h3>
        <a href="{{route('home.category', ['id' => $get_bottom2_Menus->id, 'slug' => createSlug($get_bottom2_Menus->category_en)  ])}}" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                @if (session()->get('language') === 'hindi')
                        सभी को देखें
                @elseif (session()->get('language') === 'english')
                            View All
                @elseif (session()->get('language') === 'punjabi')
                            ਸਭ ਦੇਖੋ
                @elseif (session()->get('language') === 'urdu')
                            سب دیکھیں     
                @else   

                @endif
            <i class="fs-12 m-l-5 fa fa-caret-right"></i>
        </a>
    </div>
    <!-- Main Item post -->

    @forelse ($six_CatWise_News  as $key => $cat__News )
        @if($key  == 0 )
            <div class="mb-3">
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body">
                        <a target="_blank"  href="{{route('home.inner',['newsid' => $cat__News->id , 'slug' =>  $cat__News->slug  ])}}" class="wrap-pic-w hov1 trans-03">
                            <img src="{{  isset($cat__News->image)? getNewsImage($cat__News->image)  : asset('assets/images/post-10.jpg')}}" alt="IMG" class="img-fluid rounded">
                        </a>
                        <div class="p-t-20">
                            <h5 class="p-b-5">
                                <a target="_blank"  href="{{route('home.inner',['newsid' => $cat__News->id , 'slug' =>  $cat__News->slug  ])}}" class="f1-s-5 cl2 hov-cl10 trans-03">
                                    {!!  Str::limit($cat__News->title, 85) ?? "NA" !!}
                                </a>
                            </h5>
                            <span class="cl8">
                                <a  target="_blank" href="{{ route('home.category', ['id' => $cat__News->getmenu->id, 'slug' => createSlug($cat__News->getmenu->category_en)  ])}}" class="f1-s-4 cl10 hov-cl10 trans-03">
                                    @if (session()->get('language') === 'hindi')
                                        {{$cat__News['getmenu']['category_hin'] ?? "NA"}}:
                                    @elseif (session()->get('language') === 'english')
                                        {{$cat__News['getmenu']['category_en'] ?? "NA"}}:
                                    @elseif (session()->get('language') === 'punjabi')
                                        {{$cat__News['getmenu']['category_pbi'] ?? "NA"}}:
                                    @elseif (session()->get('language') === 'urdu')
                                        {{$cat__News['getmenu']['category_urdu'] ?? "NA"}}:
                                    @else   
                                        {{$cat__News['getmenu']['category_en'] ?? "NA"}}:
                                    @endif
                                </a>
                                <span class="f1-s-3 m-rl-3">
                                    -
                                </span>
                                <span class="f1-s-3">
                                    {!! carbon\Carbon::parse($cat__News->post_date)->format('M d, Y') ?? "NA" !!}
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
         @else       
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-body">
                    <div class="flex-wr-sb-s">
                        <div class="size-w-2">
                            <h5 class="p-b-5">
                                <a target="_blank"  href="{{route('home.inner',['newsid' => $cat__News->id , 'slug' =>  $cat__News->slug  ])}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                    {!!  Str::limit($cat__News->title, 60) ?? "NA" !!}
                                </a>
                            </h5>
                            <span class="cl8">
                                <a target="_blank"  href="{{ route('home.category', ['id' => $cat__News->getmenu->id, 'slug' => createSlug($cat__News->getmenu->category_en)  ])}}" class="f1-s-4 cl10 hov-cl10 trans-03">
                                    @if (session()->get('language') === 'hindi')
                                        {{$cat__News['getmenu']['category_hin'] ?? "NA"}}:
                                    @elseif (session()->get('language') === 'english')
                                        {{$cat__News['getmenu']['category_en'] ?? "NA"}}:
                                    @elseif (session()->get('language') === 'punjabi')
                                        {{$cat__News['getmenu']['category_pbi'] ?? "NA"}}:
                                    @elseif (session()->get('language') === 'urdu')
                                        {{$cat__News['getmenu']['category_urdu'] ?? "NA"}}:
                                    @else   
                                        {{$cat__News['getmenu']['category_en'] ?? "NA"}}:
                                    @endif
                                </a>
                                <span class="f1-s-3 m-rl-3">
                                    -
                                </span>
                                <span class="f1-s-3">
                                    {!! carbon\Carbon::parse($cat__News->post_date)->format('M d, Y') ?? "NA" !!}
                                </span>
                            </span>
                        </div>
                        <a  target="_blank"  href="{{route('home.inner',['newsid' => $cat__News->id , 'slug' =>  $cat__News->slug  ])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                            <img src="{{   isset($cat__News->thumbnail)? getThumbnail($cat__News->thumbnail)  : asset('assets/images/post-11.jpg')}}" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
            </div>
        @endif
    @empty
    
    @switch(session()->get('language'))
    @case('hindi')
            <p class="text-center text-danger"> {!! "कोई खबर नहीं मिली" !!}     </p>
        @break
    @case('punjabi')
            <p class="text-center text-danger">   {!! 'ਕੋਈ ਖ਼ਬਰ ਨਹੀਂ ਮਿਲੀ' !!}</p>
        @break
    @case('urdu')
        <p class="text-center text-danger">   {!! 'کوئی خبر نہیں ملی' !!}</p>
        @break
    @case('english')
        <p class="text-center text-danger">   {{" No news found"}}</p>
    @break
    @default
        <p class="text-center text-danger">   {{" No news found"}}</p>
    @endswitch
    
    @endforelse

{{--======================== english news ======================== --}}



</div>