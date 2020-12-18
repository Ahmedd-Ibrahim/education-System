<footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
    </div>
{{--<!-- jQuery -->--}}
{{--<script src="{{asset('style/backend/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>--}}
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('style/backend/custom/bootstrap/dist/js/tether.min.js')}}"></script>
<script src="{{asset('style/backend/custom/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('style/backend/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{asset('style/backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{asset('style/backend/custom/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('style/backend/custom/js/waves.js')}}"></script>
<script src="{{asset('style/backend/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
<script src="{{asset('style/backend/custom/js/toastr.js')}}"></script>
<!--Morris JavaScript -->
<script src="{{asset('style/backend/plugins/bower_components/raphael/raphael-min.js')}}"></script>
<script src="{{asset('style/backend/plugins/bower_components/morrisjs/morris.js')}}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{asset('style/backend/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('style/backend/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js')}}"></script>

<!-- Sweet-Alert  -->
<script src="{{asset('style/backend/plugins/bower_components/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('style/backend/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('style/backend/custom/js/custom.min.js')}}"></script>
<script src="{{asset('style/backend/custom/js/dashboard1.js')}}"></script>
<script src="{{asset('style/backend/custom/js/backend.js')}}"></script>
<!--Style Switcher -->
<script src="{{asset('style/backend/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
{{-- Alerts on backend--}}

<!--Style Switcher -->
@include('dashboard.layout.alerts.alert')
{{--    End of alerts--}}


@stack('scripts')



</body>
</html>
