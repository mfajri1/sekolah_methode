<script>
  $(document).ready(function() {
    $('.js-example-theme-single').select2({
      theme: "classic",
      width: 'resolve'
    });
  });
</script>

<script>
  $('#toast').on("click", function() {
    toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "200",
      "hideDuration": "3000",
      "timeOut": "3000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    Command: toastr["success"]("Data Telah Ditambahkan", "Sukses")
  })
</script>
<!-- Bootstrap core JavaScript-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page Level Select2 -->
<!-- <script src="assets/vendor/select2/js/select2.min.js"></script> -->
<script src="assets/vendor/select2/js/select2.full.min.js"></script>
<!-- Page level custom scripts -->
<script src="assets/js/demo/datatables-demo.js"></script>
<!-- Page plugin toastr -->
<script src="assets/js/toastr.js"></script>