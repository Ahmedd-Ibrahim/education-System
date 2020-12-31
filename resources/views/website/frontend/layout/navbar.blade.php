<body>
    <div class="py-2 bg-primary">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md-5 pr-4 d-flex topper align-items-center">
                <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center">
                  <span class="icon-map"></span>
                </div>
                <span class="text"><a href="https://goo.gl/maps/rD5hvcmv3FdnYELa6" target="_blank" style="outline: none;text-decoration: none;color: white;">
                    @if ($info)
                    {{$info->address}}
                    @endif

                </a></span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center">
                  <span class="icon-paper-plane"></span>
                </div>
                <span class="text"><a href="mailto:support@ruched.org" target="_blank" style="outline: none;text-decoration: none;color: white;">@if ($info){{$info->email}}@endif</a></span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center">
                  <span class="icon-phone2"></span>
                </div>
                <span class="text"><a href="https://api.whatsapp.com/send/?phone=@if ($info){{$info->phone}}@endif&text&app_absent=0" style="outline: none;text-decoration: none;color: white;">@if ($info){{$info->phone}}@endif</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!--navbar section start-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar"
        style="direction: rtl;">
        <div class="container d-flex align-items-center">
          <div class="navbar-brand"><img src="@if($info){{asset('style/backend/images').'/'.$info->logo}} @endif" onclick="window.location.href='/'"
            style="outline: none; text-decoration: none;max-width:120px;" alt="" /></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="index.html" id="nav-linkk" class="nav-link pl-0">الرئيسية</a>
              </li>
              <li class="nav-item">
                <a href="about.html" id="nav-linkk" class="nav-link">من نحن</a>
              </li>
              <li class="nav-item">
                <a href="teacher.html" id="nav-linkk" class="nav-link">المعلمين</a>
              </li>
              <li class="nav-item">
                <a href="courses.html" id="nav-linkk" class="nav-link">المسارات التعليمية</a>
              </li>
              <li class="nav-item">
                <a href="blog.html" id="nav-linkk" class="nav-link">المدونة</a>
              </li>
              <li class="nav-item">
                <a href="contact.html" id="nav-linkk" class="nav-link">تواصل معنا</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- END nav -->
