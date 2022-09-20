</div>
<script src="<?= base_url() ?>assets/plugins/jquery/jquery-3.5.1.min.js"></script>
<script src="<?= base_url() ?>assets/js/main.min.js"></script>
<script src="<?= base_url() ?>assets/js/custom.js"></script>
<script src="<?= base_url() ?>assets/js/pages/dashboard.js"></script>
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/highlight/highlight.pack.js"></script>
<script src="<?= base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/pace/pace.min.js"></script>
<script src="<?= base_url() ?>assets/js/pages/datatables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/datatables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/blockUI/jquery.blockUI.min.js"></script>
<script>
    // var table = $('#datatable1').DataTable({
    //     ajax: "data.json"
    // });

    // setInterval(function() {
    //     table.ajax.reload();
    // }, 30000);
    $('select').select2();
    $('#blockui-2').on('click', function() {
        $.blockUI({
            message: '<div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span><div>',
            timeout: 2000
        });
    });
</script>
</body>

</html>