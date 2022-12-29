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
<!-- Moment -->
<script src="{{asset('template/plugins/moment/moment.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('template/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('template/plugins/toastr/js/toastr.min.js')}}"></script>
<!-- jquery-validation -->
<script src="{{asset('template/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('template/plugins/jquery-validation/additional-methods.js')}}"></script>
<!-- Notifications -->
@include('common.notifications')
<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/adminlte.js')}}"></script>
{{-- <!-- Daterangepicker -->
<script src="{{asset('template/plugins/daterangepicker/jquery-latest.min.js')}}"></script>
<script src="{{asset('template/plugins/daterangepicker/momentjs-latest.min.js')}}"></script>
<script src="{{asset('template/plugins/daterangepicker/daterangepicker.min.js')}}"></script> --}}

<script>
    /** add active class and stay opened when selected */
    var url = window.location.href;

    const array_url = url.split('/');
 var array = [array_url[0],array_url[1],array_url[2],array_url[3]];
 var a = array.join('/');

 // for sidebar menu entirely but not cover treeview
 $('ul.nav-sidebar a').filter(function() {
    // console.log(this.href);
     return this.href == a;
 }).addClass('active');

 // for treeview
 $('ul.nav-treeview a').filter(function() {
     return this.href == a;
 }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
  </script>
<script>
    $(function() {
      $('input[name="daterange"]').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });
    });
</script>

<script>
  
   

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    
</script>