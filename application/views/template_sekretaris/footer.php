<!-- footer content -->
        <footer>
          <div class="pull-right">
            Sistem Informasi Qurban & Zakat By <strong> Wildan Maulid Nugraha</strong>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url('') ?>assets/template/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url('') ?>assets/template/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url('') ?>assets/template/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url('') ?>assets/template/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url('') ?>assets/template/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url('') ?>assets/template/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url('') ?>assets/template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/template/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url('') ?>assets/template/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('') ?>assets/template/build/js/custom.min.js"></script>

    <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url('') ?>assets/template/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
	
    <!-- Datatables -->
    <?php 
    if (isset($footer_js)) {
        foreach ($footer_js as $fjs) { ?>
            <script type="text/javascript" src="<?= base_url($fjs) ?>"></script>
    <?php } } ?>

    
<script type="text/javascript">
    function jumlah_zakat() 
    {
        var jiwa = document.zakat_fitrah.jiwa.value;
        document.zakat_fitrah.beras.value = 2.5 * jiwa;
    }

    function hapus() {
        alert("apakah anda yakin menhapus data ini ?")
    }

    function goBack() {
    window.history.back()
    }
</script>

    <!-- <script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script> -->
    
  </body>
</html>