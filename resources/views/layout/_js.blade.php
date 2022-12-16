<!-- jQuery -->
<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('template/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/adminlte.js')}}"></script>
  <script>

 /** add active class and stay opened when selected */

 var url = window.location.href;

if(url.indexOf('/', 22) == -1){
    var a = url;
}else{
    var a = url.substring(0,(url.indexOf('/', 22)))
}

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