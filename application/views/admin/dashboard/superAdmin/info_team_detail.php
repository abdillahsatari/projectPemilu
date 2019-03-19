<section class="content">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Info Anggota
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
                        <table class="table">
                          <tbody style="border: hidden;">
                              <?php
                                  foreach ($data as $datas) {
                              ?>
                                 <tr>
                                     <td class="col-xs-2"><b>No.KTP</b></td>
                                     <td class="col-xs-1"><b>:</b></td>
                                     <td><b><?= $datas->no_ktp ?></b></td>
                                 </tr>

                                 <tr>
                                     <td class="col-xs-2"><b>Nama Anggota</b></td>
                                     <td class="col-xs-1"><b>:</b></td>
                                     <td><b><?= $datas->nama_user ?></b></td>
                                 </tr>

                                 <tr>
                                     <td class="col-xs-2"><b>Alamat</b></td>
                                     <td class="col-xs-1"><b>:</b></td>
                                     <td><b><?= $datas->alamat ?></b></td>
                                 </tr>

                                 <tr>
                                     <td class="col-xs-2"><b>No. Hp</b></td>
                                     <td class="col-xs-1"><b>:</b></td>
                                     <td><b><?= $datas->no_hp ?></b></td>
                                 </tr>

                                 <tr>
                                     <td class="col-xs-2"><b>Kelurahan</b></td>
                                     <td class="col-xs-1"><b>:</b></td>
                                     <td><b></b></td>
                                 </tr>

                                 <tr>
                                     <td class="col-xs-2"><b>Kecamatan</b></td>
                                     <td class="col-xs-1"><b>:</b></td>
                                     <td><b></b></td>
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
                      Pemilih Dikumpulkan
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
                                foreach ($data1 as $datas) {
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
