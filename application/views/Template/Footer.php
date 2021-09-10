<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<!-- <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/summernote/summernote-bs4.js') ?>"></script>

<!-- Page level plugins -->
<!-- <script src="<?php echo base_url('assets/chart/Chart.min.js') ?>"></script> -->


<!-- Page level custom scripts -->
<!-- <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js') ?>"></script>  -->



<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

<script>
  $(document).ready(function() {
    var table = $('#example').DataTable({
      rowReorder: {
        selector: 'td:nth-child(2)'
      },
      responsive: true
    });
  });
</script>


</body>

</html>