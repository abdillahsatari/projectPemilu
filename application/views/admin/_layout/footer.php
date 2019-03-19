
    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('assets/')?>plugins/bootstrap/js/bootstrap.js"></script>

    
    <!-- Select Plugin Js -->
    <script src="<?=base_url('assets/')?>plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?=base_url('assets/')?>plugins/momentjs/moment.js"></script>
    
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?=base_url('assets/')?>plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    
    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url('assets/')?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    
    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url('assets/')?>plugins/node-waves/waves.js"></script>


    <?php if ($dataScript) $this->load->view($dataScript); ?>
</body>

</html>