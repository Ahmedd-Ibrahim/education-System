@include('dashboard.layout.header')
@include('dashboard.layout.navigation')
@include('dashboard.layout.sidebar')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
@yield('content')

    </div>

@include('dashboard.layout.footer')
