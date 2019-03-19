<section class="content">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Pemilih Mariso
                    </h2>
                </div>
                <style type="text/css">
                        /*hilangkan exportable dan menyisakan input search di tabel*/
                        /*.dt-buttons {
                            display: none;
                        }*/
                    .middle{
                        text-align: center;
                    }
                    th{
                        text-align: center;
                        background: #2dd893;
                        color: white;
                    }
                     
                </style>
                <div class="body">
                    <div class="middle">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-exportable dataTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Penginput</th>
                                        <th>No. KTP</th>
                                        <th>Nama Pemilih</th>
                                        <th>Alamat</th>
                                        <th>No. Hp</th>
                                        <th>Kecamtan</th>
                                        <th>Kelurahan</th>
                                        <th>No. Tps</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Penginput</th>
                                        <th>No. KTP</th>
                                        <th>Nama Pemilih</th>
                                        <th>Alamat</th>
                                        <th>No. Hp</th>
                                        <th>Kecamtan</th>
                                        <th>Kelurahan</th>
                                        <th>No. Tps</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                        <?php
                                            $i=1;
                                            foreach ($data as $datas1) {
                                        ?>
                                            <tr>
                                                <td data-row="<?= $datas1->id_pemilih ?>"><?= $i++ ?></td>
                                                <td data-row="<?= $datas1->id_pemilih ?>"><?= $datas1->nama_user ?></td>
                                                <td data-row="<?= $datas1->id_pemilih ?>"><?= $datas1->no_ktp_pemilih ?></td>
                                                <td data-row="<?= $datas1->id_pemilih ?>"><?= $datas1->nama_pemilih ?></td>
                                                <td data-row="<?= $datas1->id_pemilih ?>"><?= $datas1->alamat_pemilih ?></td>
                                                <td data-row="<?= $datas1->id_pemilih ?>"><?= $datas1->no_hp_pemilih ?></td>
                                                <!-- <td data-row="<?= $datas1->id_pemilih ?>"><?= $datas1->level ?></td> -->
                                                <td data-row="<?= $datas1->id_pemilih ?>"><?= $datas1->nama_kecamatan ?></td>
                                                <td data-row="<?= $datas1->id_pemilih ?>"><?= $datas1->nama_kelurahan ?></td>
                                                <td data-row="<?= $datas1->id_pemilih ?>"><?= $datas1->no_tps ?></td>
                                                <td>
                                                    <a href="<?= base_url('Super_admin/selectPemilih/'.$datas1->id_pemilih) ?>" class="btn bg-cyan waves-effect"><i class="material-icons">mode_edit</i></a>
                                                    <a href="<?= base_url('Super_admin/hapusPemilih/'.$datas1->id_pemilih) ?>" class="btn bg-red waves-effect"><i class="material-icons">delete</i></a>
                                                </td>
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
    </div>
</section>
<!-- <script type="text/javascript">
    $('.dataTable').on('click', 'tbody td', function() {
        var idUser= $(this).data("row");
        window.location = "<?php echo base_url();?>Super_admin/selectAnggota/"+idUser;
})
</script>

 -->