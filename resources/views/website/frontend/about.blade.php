@extends('website.frontend.layout.main')
@section('content')

@if(isset($slide))
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('style/front/image/').'/'.$slide->image}}');" style="direction: rtl;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">من نحن</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('front')}}">الرئيسية <i class="icon ion-ios-arrow-back" style="color: white;"></i></a></a></span> <span>من نحن  <i class="icon ion-ios-arrow-back" style="color: white;"></i></a></span></p>
        </div>
      </div>
    </div>
  </section>

    @endif

  <!--Slider section start-->

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

@endsection
