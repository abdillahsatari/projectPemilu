<section class="content">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Belum Verifikasi
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
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>No. Hp</th>
                                    <th>Posisi</th>
                                    <th>Status ferivikasi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No. KTP</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>No. Hp</th>
                                    <th>Posisi</th>
                                    <th>Status ferivikasi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                    <?php
                                        foreach ($data1 as $datas1) {
                                    ?>
                                        <tr>
                                            <td data-row="<?= $datas1->id_user ?>"><?= $datas1->no_ktp ?></td>
                                            <td data-row="<?= $datas1->id_user ?>"><?= $datas1->nama_user ?></td>
                                            <td data-row="<?= $datas1->id_user ?>"><?= $datas1->alamat ?></td>
                                            <td data-row="<?= $datas1->id_user ?>"><?= $datas1->no_hp ?></td>
                                            <td data-row="<?= $datas1->id_user ?>"><?= $datas1->level ?></td>
                                            <td data-row="<?= $datas1->id_user ?>"><?= $datas1->status_approved ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2>
                        Terverifikasi
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
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>No. Hp</th>
                                    <th>Status</th>
                                    <th>Status ferivikasi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No. KTP</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>No. Hp</th>
                                    <th>Status</th>
                                    <th>Status ferivikasi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                    <?php
                                        foreach ($data as $datas) {
                                    ?>
                                        <tr>
                                            <td data-row="<?= $datas->id_user ?>"><?= $datas->no_ktp ?></td>
                                            <td data-row="<?= $datas->id_user ?>"><?= $datas->nama_user ?></td>
                                            <td data-row="<?= $datas->id_user ?>"><?= $datas->alamat ?></td>
                                            <td data-row="<?= $datas->id_user ?>"><?= $datas->no_hp ?></td>
                                            <td data-row="<?= $datas->id_user ?>"><?= $datas->level ?></td>
                                            <td data-row="<?= $datas->id_user ?>"><?= $datas->status_approved ?></td>
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
        var idUser= $(this).data("row");
        window.location = "<?php echo base_url();?>Super_admin/selectAnggota/"+idUser;
})
</script>

