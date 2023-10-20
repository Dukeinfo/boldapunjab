<section class="p-t-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
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
             @if(isset($homeTopAdd->image))
                <a href="{{$homeTopAdd->link_add ?? "#"}}">
                    <img src="{{  getAddImage($homeTopAdd->image)}}" class="img-fluid" alt="Advertisement">
                </a>
            @else
 
             @endif
            </div>
        </div>
    </div>
</section>