<div class="col-lg-4">
    <div class="row">

  

        @forelse ($rightAdvertisements as $advertisement)
        <div class="col-lg-12 mb-4" wire:poll>
            <div class="card bg-white shadow-sm text-center border-0">
                <div class="card-body">
                    <p class="text-uppercase text-center small pb-2">
                        @switch(session()->get('language'))
                        @case('hindi')
                            विज्ञापन
                            @break
                        @case('english')
                            Advertisement
                            @break
                        @case('punjabi')
                            ਇਸ਼ਤਿਹਾਰ
                            @break
                        @case('urdu')
                            اشتہار
                            @break
                        @default
                            Advertisement
                        @endswitch 

                    </p>
             @if(isset($advertisement->image))

                    <a href="{{$advertisement->link_add ?? "#"}}">
                        <img src="{{  getAddImage($advertisement->image) }}" class="img-fluid" alt="">
                    </a>
                    @endif
                </div>
            </div>
        </div>
        @empty
            
        @endforelse

    
        <!-- Editor's Desk -->
        <div class="col-lg-12 mb-4">
            <div class="how2 how2-cl5 flex-sb-c m-b-35 mb-3 bg-white">
                <h3 class="f1-m-2 cl17 tab01-title">
                    @if (session()->get('language') === 'hindi')
                          संपादक डेस्क
                    @elseif (session()->get('language') === 'english')
                        Editor's Desk
                    @elseif (session()->get('language') === 'punjabi')
                            ਸੰਪਾਦਕ ਦਾ ਡੈਸਕ
                    @elseif (session()->get('language') === 'urdu')
                        ایڈیٹر کی میز
                    @endif
                </h3>
            </div>
            <div class="card bg-white border-0">
                <div class="card-body">
                    <div class="media align-items-center">
                        <img src="{{asset('assets/images/editor.png')}}" class="mr-3" width="90" alt="">
                        <div class="media-body">
                            <h5 class="mt-0 text-dark font-weight-bold">Parminder Singh Jatpuri</h5>
                            <p class="mb-3">Editor</p>
                            <p>
                                <a href="javascript:void()" class="btn btn-primary btn-sm px-3">Know More </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-12">
            <!-- Video -->
            <div class="p-b-30">
                <div class="position-relative">
                    <div class="wrap-pic-w pos-relative">
                        <img src="{{ isset($homelivetvnews->video_image) ?  get_video_image($homelivetvnews->video_image): asset('assets/images/video-01.jpg')}}" alt="IMG">
                        <button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal" data-target="#modal-video-01">
                            <span class="fab fa-youtube"></span>
                        </button>
                    </div>
                    <div class="p-tb-16 p-rl-25 bg3">
                        <h5 class="p-b-5">
                            <a href="javascript:void()" class="f1-m-3 cl0 hov-cl10 trans-03">
                                <span class="rippleSpan"></span> Watch LIVE TV
                            </a>
                        </h5>
                        <span class="cl15">
                            <span class="f1-s-3">
                                Khabarwaale TV
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <!-- Stay Connected -->
            <div class="p-b-30">
                <div class="how2 how2-cl5 mb-4 flex-s-c bg-white">
                    <h3 class="f1-m-2 cl17 tab01-title">
                        @if (session()->get('language') === 'hindi')
                                    जुड़े रहो
                        @elseif (session()->get('language') === 'english')
                                Stay Connected
                        @elseif (session()->get('language') === 'punjabi')
                                ਜੁੜੇ ਰਹੋ
                        @elseif (session()->get('language') === 'urdu')
                                جڑے رہیے
                        @endif
                    </h3>
                </div>
                <ul class="bg-white p-4 shadow-sm rounded">
                    <li class="flex-wr-sb-c p-b-20">
                        <a href="javascript:void()" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
                            <span class="fab fa-facebook-f"></span>
                        </a>
                        <div class="size-w-3 flex-wr-sb-c">
                            <span class="f1-s-8 cl3 p-r-20">
                                12.5K Followers
                            </span>
                            <a href="javascript:void()" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                Like
                            </a>
                        </div>
                    </li>
                    <li class="flex-wr-sb-c p-b-20">
                        <a href="javascript:void()" class="size-a-8 flex-c-c borad-3 size-a-8 bg-dark fs-16 cl0 hov-cl0">
                            <span class="fab fa-instagram"></span>
                        </a>
                        <div class="size-w-3 flex-wr-sb-c">
                            <span class="f1-s-8 cl3 p-r-20">
                                10K Followrs
                            </span>
                            <a href="javascript:void()" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                Share
                            </a>
                        </div>
                    </li>
                    <li class="flex-wr-sb-c p-b-20">
                        <a href="javascript:void()" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
                            <span class="fab fa-twitter"></span>
                        </a>
                        <div class="size-w-3 flex-wr-sb-c">
                            <span class="f1-s-8 cl3 p-r-20">
                                568 Followers
                            </span>
                            <a href="javascript:void()" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                Follow
                            </a>
                        </div>
                    </li>
                    <li class="flex-wr-sb-c p-b-20">
                        <a href="javascript:void()" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
                            <span class="fab fa-youtube"></span>
                        </a>
                        <div class="size-w-3 flex-wr-sb-c">
                            <span class="f1-s-8 cl3 p-r-20">
                                5039 Subscribers
                            </span>
                            <a href="javascript:void()" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                Subscribe
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>