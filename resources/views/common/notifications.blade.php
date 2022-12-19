<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    @if(session()->has('success')) Command: toastr["success"]("{!! nl2br(htmlentities(session()->get('success'))) !!}", "Success" ); @endif
    @if(session()->has('warning')) Command: toastr["warning"]("{!! nl2br(htmlentities(session()->get('warning'))) !!}", "Warning"); @endif
    @if(session()->has('error')) Command: toastr["error"]("{!! nl2br(htmlentities(session()->get('error'))) !!}", "Error"); @endif
</script>
