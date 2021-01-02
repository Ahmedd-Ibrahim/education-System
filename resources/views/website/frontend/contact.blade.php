@extends('website.frontend.layout.main')
@section('content')

    @if(isset($slide))
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('style/front/image/').'/'.$slide->image}}');" style="direction: rtl;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">تواصل معنا الآن</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('front')}}">الرئيسية <i class="icon ion-ios-arrow-back" style="color: white;"></i></a></a></span> <span>تواصل معنا <i class="icon ion-ios-arrow-back" style="color: white;"></i></a></span></p>
        </div>
      </div>
    </div>
  </section>

    @endif

  <!--Slider section start-->

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-4 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">العنوان</h3>
              <p>
                @isset($info)
                {{$info->address}}
                @endisset                </p>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">رقم الهاتف</h3>
              <p><a href="tel://+  @isset($info)
                {{$info->phone}}
                @endisset">
                 @isset($info)
                {{$info->phone}}
                @endisset</a></p>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">البريد الإلكتروني</h3>
              <p><a href="mailto:info@yoursite.com">
                  @isset($info)
                  {{$info->email}}
                  @endisset
            </a></p>
            </div>
        </div>
      </div>
    </div>
  </section>

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
