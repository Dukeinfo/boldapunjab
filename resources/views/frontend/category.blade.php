@extends('layouts.master')
@section('title', 'Khabarwaale - News Portal')
@section('desc', 'Khabarwaale - News Portal')
@section('keywords', 'Khabarwaale - News Portal')
@section('content')

<section class="p-t-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="text-uppercase text-center small pb-2">{{GoogleTranslate::trans('Advertisement', app()->getLocale()) ?? "NA"}}</p>
                <a href="javascript:void()">
                    <img src="{{asset('assets')}}/images/ads/h-ad1.png" class="img-fluid" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Page heading -->
<div class="container p-t-30">
    <h2 class="f1-l-1 cl2 text-center">
        Punjab
    </h2>
</div>

<!-- Breadcrumb -->
<div class="container">
    <div class="flex-wr-sb-c justify-content-center p-tb-10">
        <div class="f2-s-1 m-tb-6">
            <a href="{{url('/')}}" class="breadcrumb-item f1-s-3 cl9">
                Home
            </a>

            <a href="{{url('/category')}}" class="breadcrumb-item f1-s-3 cl9">
                Category
            </a>

            <span class="breadcrumb-item f1-s-3 cl9">
                Punjab
            </span>
        </div>
    </div>
</div>




<section class="p-t-30">
    <div class="container">
        <div class="row m-rl--1">
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="how2 how2-cl5 flex-sb-c mb-4 bg-white">
                            <h3 class="f1-m-2 cl17 tab01-title">
                                Latest News
                            </h3>
                        </div>
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="border border-top-0 border-left-0 border-right-0 pb-3">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                <span class="text-danger mr-1">Chandigarh:</span>
                                                ED arrests woman IAS officer Ranu Sahu in alleged coal levy case in Chandigarh
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="border border-top-0 border-left-0 border-right-0 pb-3">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                <span class="text-danger mr-1">Manipur Live:</span>
                                                Smriti Irani versus Mahua Moitra over Cong's 'FAILED' report card on Manipur
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="border border-top-0 border-left-0 border-right-0 pb-3">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                <span class="text-danger mr-1">Watch |</span>
                                                Bus carrying over 24 passengers gets stuck in water in UP's Bijnor
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="border border-top-0 border-left-0 border-right-0 pb-3">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                <span class="text-danger mr-1">Ludhiana:</span>
                                                Punjab CM: 'Unfortunate' governor doesn't know if special assembly session was legal
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="border border-top-0 border-left-0 border-right-0 pb-3">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                <span class="text-danger mr-1">Maharashtra Live:</span>
                                                Nandini milk price likely to go up by Rs. 3 starting from August 1
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="javascript:void()" class="btn btn-primary px-5">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="card bg-white shadow-sm text-center border-0">
                            <div class="card-body">
                                <p class="text-uppercase text-center small pb-2">{{GoogleTranslate::trans('Advertisement', app()->getLocale()) ?? "NA"}}</p>
                                <a href="javascript:void()">
                                    <img src="{{asset('assets')}}/images/ads/v-ad1.gif" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="how2 how2-cl5 flex-sb-c mb-4 bg-white">
                            <h3 class="f1-m-2 cl17 tab01-title">
                                Punjab
                            </h3>
                        </div>
                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-body">
                                <div class="p-b-20">
                                    <h5 class="p-b-5">
                                        <a href="{{url('/inner')}}" class="f1-m-3 cl2 hov-cl10 trans-03 font-weight-bold">
                                            Ashok Gehlot slams PM for calling Manipur 'his govt' in 'few secs' of speech
                                        </a>
                                    </h5>
                                    <span class="cl8">
                                        <a href="{{url('/category')}}" class="f1-s-4 cl10 hov-cl10 trans-03">
                                            National
                                        </a>
                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>
                                        <span class="f1-s-3">
                                            Jul 22, 2023
                                        </span>
                                    </span>
                                </div>
                                <a href="{{url('/inner')}}" class="wrap-pic-w hov1 trans-03">
                                    <img src="{{asset('assets')}}/images/news/n1.jpg" alt="IMG" class="img-fluid rounded">
                                </a>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-body">
                                <div class="flex-wr-sb-s">
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                Centre sent 'consequence' notice to Twitter for not blocking URLs amid farm stir
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="javascript:void();" class="f1-s-4 cl10 hov-cl10 trans-03">
                                                Punjab
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                    <a href="javascript:void()" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset('assets')}}/images/post-06.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-body">
                                <div class="flex-wr-sb-s">
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                ED arrests woman IAS officer Ranu Sahu in alleged coal levy case in Chandigarh
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="javascript:void();" class="f1-s-4 cl10 hov-cl10 trans-03">
                                                Chandigarh
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                    <a href="javascript:void()" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset('assets')}}/images/post-05.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-body">
                                <div class="flex-wr-sb-s">
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                Centre sent 'consequence' notice to Twitter for not blocking URLs amid farm stir
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="javascript:void();" class="f1-s-4 cl10 hov-cl10 trans-03">
                                                Punjab
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                    <a href="javascript:void()" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset('assets')}}/images/post-08.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-body">
                                <div class="flex-wr-sb-s">
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                ED arrests woman IAS officer Ranu Sahu in alleged coal levy case in Chandigarh
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="javascript:void();" class="f1-s-4 cl10 hov-cl10 trans-03">
                                                Chandigarh
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                    <a href="javascript:void()" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset('assets')}}/images/post-07.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-body">
                                <div class="flex-wr-sb-s">
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                ED arrests woman IAS officer Ranu Sahu in alleged coal levy case in Chandigarh
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="javascript:void();" class="f1-s-4 cl10 hov-cl10 trans-03">
                                                Chandigarh
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                    <a href="javascript:void()" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset('assets')}}/images/post-04.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-body">
                                <div class="flex-wr-sb-s">
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                ED arrests woman IAS officer Ranu Sahu in alleged coal levy case in Chandigarh
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="javascript:void();" class="f1-s-4 cl10 hov-cl10 trans-03">
                                                Chandigarh
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                    <a href="javascript:void()" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset('assets')}}/images/post-10.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-5">
                            <p class="text-uppercase text-center small pb-2">{{GoogleTranslate::trans('Advertisement', app()->getLocale()) ?? "NA"}}</p>
                            <a href="javascript:void()">
                                <img src="{{asset('assets')}}/images/ads/ad2.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-body">
                                <div class="flex-wr-sb-s">
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                ED arrests woman IAS officer Ranu Sahu in alleged coal levy case in Chandigarh
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="javascript:void();" class="f1-s-4 cl10 hov-cl10 trans-03">
                                                Chandigarh
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                    <a href="javascript:void()" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset('assets')}}/images/post-01.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-body">
                                <div class="flex-wr-sb-s">
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                ED arrests woman IAS officer Ranu Sahu in alleged coal levy case in Chandigarh
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="javascript:void();" class="f1-s-4 cl10 hov-cl10 trans-03">
                                                Chandigarh
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                    <a href="javascript:void()" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset('assets')}}/images/post-02.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-body">
                                <div class="flex-wr-sb-s">
                                    <div class="size-w-2">
                                        <h5 class="p-b-5">
                                            <a href="javascript:void();" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                ED arrests woman IAS officer Ranu Sahu in alleged coal levy case in Chandigarh
                                            </a>
                                        </h5>
                                        <span class="cl8">
                                            <a href="javascript:void();" class="f1-s-4 cl10 hov-cl10 trans-03">
                                                Chandigarh
                                            </a>
                                            <span class="f1-s-3 m-rl-3">
                                                -
                                            </span>
                                            <span class="f1-s-3">
                                                Jul 22, 2023
                                            </span>
                                        </span>
                                    </div>
                                    <a href="javascript:void()" class="size-w-1 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset('assets')}}/images/post-03.jpg" alt="" class="img-fluid rounded">
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Pagination -->
                <div class="flex-wr-s-c m-rl--7 p-t-15 p-b-30 justify-content-center">
                    <a href="javascript:void()" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
                    <a href="javascript:void()" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="card bg-white shadow-sm text-center border-0">
                            <div class="card-body">
                                <p class="text-uppercase text-center small pb-2">{{GoogleTranslate::trans('Advertisement', app()->getLocale()) ?? "NA"}}</p>
                                <a href="javascript:void()">
                                    <img src="{{asset('assets')}}/images/ads/ad1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="card bg-white shadow-sm text-center border-0">
                            <div class="card-body">
                                <p class="text-uppercase text-center small pb-2">{{GoogleTranslate::trans('Advertisement', app()->getLocale()) ?? "NA"}}</p>
                                <a href="javascript:void()">
                                    <img src="{{asset('assets')}}/images/ads/ad2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Editor's Desk -->
                    <div class="col-lg-12 mb-4">
                        <div class="how2 how2-cl5 flex-sb-c m-b-35 mb-3 bg-white">
                            <h3 class="f1-m-2 cl17 tab01-title">
                                Editor's Desk
                            </h3>
                        </div>
                        <div class="card bg-white border-0">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <img src="{{asset('assets')}}/images/editor.png" class="mr-3" width="90" alt="">
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
                                    <img src="{{asset('assets')}}/images/video-01.jpg" alt="IMG">
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
                                    Stay Connected
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

                        <!-- Subscribe -->
                        <div class="bg10 p-rl-35 p-t-28 p-b-30 m-b-55">
                            <h5 class="f1-m-5 cl0 p-b-10">
                                Subscribe
                            </h5>
                            <p class="f1-s-1 cl0 p-b-25">
                                Get all latest content delivered to your email a few times a month.
                            </p>
                            <form class="size-a-9 pos-relative">
                                <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">
                                <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop