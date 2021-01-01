@extends('website.frontend.layout.main')
@section('content')
@section('css')
<style>
    .pagination{
        display: block
    }
    .page-item:first-child .page-link{
        border-top-left-radius: 1.25rem;
    border-bottom-left-radius: 1.25rem;
    }
    .block-27 ul li a, .block-27 ul li span{
        line-height: 1.5;
    }
    .page-item:last-child .page-link{

    border-top-right-radius: 1.25rem;
    border-bottom-right-radius: 1.25rem;

    }
</style>
@endsection
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('style/front/image/').'/'.$slide->image}}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">اخر الأخبار</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('front')}}">الرئيسية <i class="icon ion-ios-arrow-back" style="color: white;"></i></a></span> <span>الأخبار <i class="icon ion-ios-arrow-back" style="color: white;"></i></a></span></p>
        </div>
      </div>
    </div>
  </section>

  <!--blog section start-->
      <section class="ftco-section bg-light">
          <div class="container">
              <div class="row">
                  @if (isset($blogs) && count($blogs) >0)
                  @foreach ($blogs as $blog)
                  <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                      <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{asset('style/front/image/').'/'.$blog->image}}');">
                      </a>
                      <div class="text bg-white p-4">
                        <h3 class="heading" style="text-align: right;">{{$blog->title}}</h3>
                      <p style="text-align: right;">{{strip_tags($blog->content)}}</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="{{route('front.posts.single',$blog->id)}}" class="btn btn-secondary">اقرأ المزيد <span class="ion-ios-arrow-round-back" style="color: white;"></span></a></p>
                            <p class="ml-auto mb-0">
                            </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @endif

      </div>

      <div class="row no-gutters my-5">
        <div class="col text-center">
          <div class="block-27">
            {{$blogs->links()}}
          </div>
        </div>
      </div>
          </div>
  </section>

@endsection
