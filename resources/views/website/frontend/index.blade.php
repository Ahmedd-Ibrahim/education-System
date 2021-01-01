@extends('website.frontend.layout.main')
@section('content')
<section class="home-slider owl-carousel">

    @if(isset($slides) && count($slides) > 0)
    @foreach ($slides as $slide)
    <div class="slider-item" style="background-image: url({{asset('style/front/image/').'/'.$slide->image}})">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 text-center ftco-animate">
              <h1 class="mb-4">{{$slide->title}}</h1>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    @endif


  </section>

  <!--Slider section start-->

  <!--services section start-->

  <section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
      <div class="row no-gutters">

        @if ($provides)
        @foreach ($provides as $item)
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="{{$item->class}}"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">{{$item->title}}</h3>
                <p>
                {{$item->description}}
                </p>
              </div>
            </div>
          </div>
        @endforeach
        @endif

      </div>
    </div>
  </section>

  <!--services section end-->

  <!--welcome section start-->
  <section class="ftco-section ftco-no-pt ftc-no-pb bg-light">
    <div class="container" >
      <div class="row">
        <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
          <div class="text px-4 ftco-animate">
            <h2 class="mb-4" style="direction:rtl;text-align: start;">
                @if($static) {{$static->welcome_title}}@endif
            </h2>
            <p style="direction:rtl;text-align: start;font-weight: 500;font-size: larger;">
                @if($static) {{$static->welcome_desc}}@endif
                </p>
            <p></p>
          </div>
        </div>
        <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          <h2 class="mb-4" style="direction:rtl;text-align: start;">
            @if($static) {{$static->welcome_provide_title}}@endif
        </h2>
          <p style="direction:rtl;text-align: start;">
            @if($static) {{$static->welcome_provide_sub_title}}@endif
        </p>
          <div class="row mt-5">

            @if ($services)
            @foreach ($services as $service)
            <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center">
                    <span class="{{$service->class}}"></span>
                  </div>
                  <div class="text">
                    <h3 style="direction:rtl;text-align: start;">{{$service->title}}</h3>
                    <p style="direction:rtl;text-align: start;">{{$service->description}}</p>
                  </div>
                </div>
              </div>
            @endforeach
            @endif

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--welcome section end-->

  <!--intro section start-->
  <section class="ftco-intro" style="background-image: url({{asset('style/front/images/bg_3.jpg')}})" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center>
            <h2>    @if($static) {{$static->smoth_title}}@endif </h2>
            <p class="mb-0">
                @if($static) {{$static->somth_desc}}@endif
            </p>
          </center>
        </div>
      </div>
    </div>
  </section>
  <!--intro section end-->

  <!--Teachers Section start-->
  <section class="ftco-section ftco-no-pb">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4">
            @if($static) {{$static->professional_title}}@endif

          </h2>
          <p>
            @if($static) {{$static->professional_sub_title}}@endif

          </p>
        </div>
      </div>
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
  </section>
  <!--Teachers Section start-->

  <!--Our Courses start-->

  <section class="ftco-section">
    <div class="container" style="direction: rtl;">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"> @if($static) {{$static->subject_title}}@endif</h2>
          <p> @if($static) {{$static->subject_sub_title}}@endif</p>
        </div>
      </div>
      <div class="row">
          @if ($subjects)
          @foreach ($subjects as $subject)
          <div class="col-md-6 course d-lg-flex ftco-animate">
            <div class="img" style="background-image: url({{asset('style/front/image/').'/'.$subject->image}})"></div>
            <div class="text bg-light p-4">
              <h3 style="color: #89cff0; font-weight: bolder;text-align: right;">{{$subject->name}}</h3>
              <p style="text-align: right;">{{$subject->description}}</p>
            </div>
          </div>
          @endforeach
          @endif
      </div>
    </div>
  </section>
  <!--Our Courses end-->

  <!--experiance section start-->

  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('style/front/images/bg_4.jpg')}})"
    data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
          <h2 class="mb-4"><span>@if($experinces) {{$experinces->title}}@endif </span></h2>
          <p>@if($experinces) {{$experinces->description}}@endif </p>
        </div>
      </div>
      <div class="row d-md-flex align-items-center justify-content-center">
        <div class="col-lg-10">
          <div class="row d-md-flex align-items-center">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="@if($experinces) {{$experinces->reowrd_number}}@endif">0</strong>
                  <span>@if($experinces) {{$experinces->reowrd}}@endif </span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="@if($experinces) {{$experinces->parent_number}}@endif">0</strong>
                  <span>@if($experinces) {{$experinces->parent}}@endif</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="@if($experinces) {{$experinces->child_number}}@endif">0</strong>
                  <span>@if($experinces) {{$experinces->child}}@endif</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="@if($experinces) {{$experinces->teacher_number}}@endif">0</strong>
                  <span>@if($experinces) {{$experinces->teacher}}@endif</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--experiance section end-->

  <!--parent review start-->

  <section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>  @if($static) {{$static->experince_title}}@endif</span></h2>
        </div>
      </div>
      <div class="row ftco-animate justify-content-center">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
              @if ($proofs)
              @foreach ($proofs as $proof)
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{asset('style/front/image/').'/'.$proof->image}})"></div>
                  <div class="text ml-2 bg-light">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>
                        {{$proof->description}}
                     </p>
                    <p class="name"> {{$proof->title}}</p>
                    <span class="position"> {{$proof->sub_title}}</span>
                  </div>
                </div>
              </div>
              @endforeach
              @endif
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--parent review end-->

  <!--contact us start-->

  <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{asset('style/front/images/bg_5.jpg')}})"
    data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6 py-5 px-md-5 bg-primary" style="direction: rtl;text-align: right">
          <div class="heading-section heading-section-white ftco-animate mb-5">
            <h2 class="mb-4">تواصل معنا</h2>
          </div>
          <form action="{{route('admin.front.contact.store')}}" class="appointment-form ftco-animate" method="POST">
            @csrf
            <div class="d-md-flex">
              <div class="form-group" style="margin: 10px;">
                <input type="text" class="form-control" placeholder="الإسم" name="username" />
              </div>
            </div>
            @error('username')
               <div class="alert alert-danger">  {{$message}} </div>
            @enderror
            <div class="d-md-flex">
              <div class="form-group" style="margin: 10px;">
                <input type="email" class="form-control" placeholder="البريد الألكتروني" name="email" />
              </div>

            </div>
            @error('email')
                <div class="alert alert-danger">  {{$message}} </div>
             @enderror
            <div class="d-md-flex">
              <div class="form-group ml-md-4" style="margin: 10px;">
                <input type="number" class="form-control" placeholder="رقم الهاتف" name="phone" />
              </div>
            </div>
            @error('phone')
                 <div class="alert alert-danger">  {{$message}} </div>
            @enderror
            <div class="d-md-flex" >
              <div class="form-group" style="margin: 10px;">
                <textarea  id="" cols="30" rows="2" class="form-control" placeholder="اكتب رسالتك" name="message"></textarea>
              </div>
            </div>
            @error('message')
             <div class="alert alert-danger">  {{$message}} </div>
             @enderror
            <div class="d-md-flex">
                <div class="form-group ml-md-4" style="margin: 10px;">
                    <input type="submit" value="اطلب الآن" class="btn btn-secondary py-3 px-4" />
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--contact us end-->

  <!--blog section start-->
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>اخر</span> الأخبار</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end"
              style="background-image: url('{{asset('style/front/images/image_1.jpg')}}')">
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading" style="text-align: right;">تنمية و تطوير ذكاء طفلك</h3>
              <p style="text-align: right;">مساعدة طفلك لتنمية مهاراته</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end"
              style="background-image: url('{{asset('style/front/images/image_2.jpg')}}')">
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading" style="text-align: right;">تنمية و تطوير ذكاء طفلك</h3>
              <p style="text-align: right;">مساعدة طفلك لتنمية مهاراته</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end"
              style="background-image: url('{{asset('style/front/images/image_3.jpg')}}')">
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading" style="text-align: right;">تنمية و تطوير ذكاء طفلك</h3>
              <p style="text-align: right;">مساعدة طفلك لتنمية مهاراته</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--blog section end-->

@endsection
