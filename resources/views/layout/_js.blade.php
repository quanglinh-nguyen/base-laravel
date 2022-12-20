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

<script>
    /** add active class and stay opened when selected */
    var url = window.location.href;

    const array_url = url.split('/');
 console.log(array_url);
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