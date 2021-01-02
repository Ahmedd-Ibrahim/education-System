@extends('website.frontend.layout.main')
@section('content')

    @if(isset($slide))
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('style/front/image/').'/'.$slide->image}}');" style="direction: rtl;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">المسارات التعليمية</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('front')}}">الرئيسية <i class="icon ion-ios-arrow-back" style="color: white;"></i></a></a></span> <span>المسارات التعليمية <i class="icon ion-ios-arrow-back" style="color: white;"></i></a></span></p>
        </div>
      </div>
    </div>
  </section>

    @endif

  <!--Our Courses start-->

  <section class="ftco-section">
    <div class="container" style="direction: rtl;">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>المواد</span> الدراسية</h2>
          <p>اليك نبذة عن المواد الجراسية الخاصة بمنظمة رشد التعليمية</p>
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
    </div>
  </section>
  <!--Our Courses end-->



@endsection
