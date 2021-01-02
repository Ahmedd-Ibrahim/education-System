@extends('website.frontend.layout.main')
@section('content')

    @if(isset($slide))
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('style/front/image/').'/'.$slide->image}}');" style="direction: rtl;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">معلمين معتمدين
            </h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('front')}}">الرئيسية <i class="icon ion-ios-arrow-back" style="color: white;"></i>
        </a></a></span> <span>معلمين معتمدين
            <i class="icon ion-ios-arrow-back" style="color: white;"></i></a></span></p>
        </div>
      </div>
    </div>
  </section>
    @endif
  <!--Our Courses start-->

  <section class="ftco-section">
      {{$professionals->links()}}
    <div class="container" style="direction: rtl;">

      <div class="row">


        @if ($professionals)
        @foreach ($professionals as $professional)
        <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url({{asset('style/front/image/').'/'.$professional->image}})"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>{{$professional->name}}</h3>
                <span class="position mb-2">{{$professional->job_name}}</span>
                <div class="faded">
                  <p>
                    {{$professional->description}}
                  </p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate">
                      <a href="{{$professional->twiiter_link}}"><span class="icon-twitter"></span></a>
                    </li>
                    <li class="ftco-animate">
                      <a href="{{$professional->fb_link}}"><span class="icon-facebook"></span></a>
                    </li>
                    <li class="ftco-animate">
                      <a href="{{$professional->google_link}}"><span class="icon-google-plus"></span></a>
                    </li>
                    <li class="ftco-animate">
                      <a href="{{$professional->insta}}"><span class="icon-instagram"></span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        @endif

        </div>
      </div>
    </div>
    {{$professionals->links()}}
  </section>
  <!--Our Courses end-->



@endsection
