<section class="content">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Daftar Pemilih
                    </h2>
                </div>
                <style type="text/css">
                    /*hilangkan exportable dan menyisakan input search di tabel*/
                    .dt-buttons {
                        display: none;
                    }
                </style>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-exportable dataTable">
                            <thead>
                                <tr>
                                    <th>No. KTP</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>HP</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No. KTP</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>HP</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                    <?php
                                        foreach ($data as $datas) {
                                    ?>
                                        <tr>
                                            <td data-row="<?= $datas->id_pemilih ?>"><?= $datas->no_ktp_pemilih ?></td>
                                            <td data-row="<?= $datas->id_pemilih ?>"><?= $datas->nama_pemilih ?></td>
                                            <td data-row="<?= $datas->id_pemilih ?>"><?= $datas->alamat_pemilih ?></td>
                                            <td data-row="<?= $datas->id_pemilih ?>"><?= $datas->no_hp_pemilih ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $('.dataTable').on('click', 'tbody td', function() {
        var idPemilih= $(this).data("row");
        window.location = "<?php echo base_url();?>Admin_kelurahan/selectPemilih/"+idPemilih;
  
})
</script>


