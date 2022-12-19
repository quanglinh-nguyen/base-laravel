<!-- jQuery -->
<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('template/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('template/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>
<!-- Toastr -->
<script src="{{asset('template/plugins/toastr/js/toastr.min.js')}}"></script>
<!-- Notifications -->
@include('common.notifications')
<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/adminlte.js')}}"></script>


