@extends('website.frontend.layout.main')
@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('style/front/image/').'/'.$slide->image}}');" style="direction: rtl;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">صفحة المقال</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">الرئيسية <i class="icon ion-ios-arrow-back" style="color: white;"></i></a></a></span> <span>المقالات <i class="icon ion-ios-arrow-back" style="color: white;"></i></a></span></p>
        </div>
      </div>
    </div>
  </section>

      <section class="ftco-section" dir="rtl">
          <div class="container">
              <div class="row">
        <div class="col-lg-8 ftco-animate" style="text-align: right;">
          <h2 class="mb-3">{{$post->title}}</h2>
          <p>{{$post->intro}}</p>
          <p>
            <img src="@isset($post->image){{asset('style/front/image/').'/'.$post->image}} @endisset" alt="" class="img-fluid">
          </p>
          <p class="text-wrap" style="
          display: block;
          overflow: hidden;
      ">

          {{strip_tags($post->content)}}
          </p>


            <div class="tag-widget post-tag-container mb-5 mt-5">

          </div>

          <div class="pt-5 mt-5">
            <h3 class="mb-5 h4 font-weight-bold">6 تعليقات</h3>
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard bio">
                  <img src="images/teacher-1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">الرد</a></p>
                </div>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="images/teacher-1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">الرد</a></p>
                </div>

                <ul class="children">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/teacher-1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">الرد</a></p>
                    </div>


                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/teacher-1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">الرد</a></p>
                        </div>

                          <ul class="children">
                            <li class="comment">
                              <div class="vcard bio">
                                <img src="images/teacher-1.jpg" alt="Image placeholder">
                              </div>
                              <div class="comment-body">
                                <h3>John Doe</h3>
                                <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">الرد</a></p>
                              </div>
                            </li>
                          </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="images/teacher-1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>
            </ul>
            <!-- END comment-list -->

            <!-- Your Comment Start -->
            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5 h4 font-weight-bold">اكتب تعليق</h3>
              <form action="#" class="p-5 bg-light">
                <div class="form-group">
                  <label for="name">الإسم *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">البريد الإلكتروني *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="message">تعليقك</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="سجل تعليقك" class="btn py-3 px-4 btn-primary">
                </div>

              </form>
            </div>
          </div>
        </div> <!-- Your Comment end-->

        <!--Side bar Section start-->

        <div class="col-lg-4 sidebar ftco-animate">
          <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon icon-search"></span>
                <input type="text" class="form-control" placeholder="اكتب ما تريد البحث عنه">
              </div>
            </form>
          </div>
          <div class="sidebar-box ftco-animate">
              <h3 style="text-align:right;">الأقسام</h3>
            <ul class="categories" style="text-align: right;">
              <li><a href="#">لغة عربية</a></li>
              <li><a href="#">لغة إنجليزية</a></li>
              <li><a href="#">رياضيات</a></li>
              <li><a href="#">مادة ديسكفري</a></li>
            </ul>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 style="text-align: right;">اشهر المقالات</h3>
            @if (isset($latests) && count($latests) > 0)
            @foreach ($latests as $latest)
            <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(@isset($latest->image){{asset('style/front/image/').'/'.$latest->image}} @endisset);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">{{$latest->title}}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Jan. 27, 2019</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            @endforeach
            @endif



          <div class="sidebar-box ftco-animate" style="text-align: right;">
              <h3 >الأرشيف</h3>
            <ul class="categories">
                <li><a href="#">ديسيمبر 2019 </a></li>
                <li><a href="#">نوفمبر 2019</a></li>
              <li><a href="#">سبتمبر 2019</a></li>
              <li><a href="#">اغسطس 2019</a></li>
            </ul>
          </div>
        </div>
        <!--Side bar Section start-->
      </div>
          </div>
      </section>
@endsection
