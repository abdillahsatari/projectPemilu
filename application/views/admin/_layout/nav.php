<?php $modul = $this->uri->segment(2); $method = $this->uri->segment(3); ?>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <?php if($this->session->userdata('level') == !NULL):?>
        <div class="user-info">
            <div class="image">
                <img src="<?=base_url('assets/')?>images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $this->session->userdata('nama_user'); ?>
                </div>
                <div class="email"><?php echo $this->session->userdata('level'); ?></div>
                <!-- <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
        <style type="text/css">
            .badge{
                color: white !important;
            }
        </style>
        <?php endif; ?>
        <!-- END IF FOR USER INFO -->
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <!-- <li class="header">MAIN NAVIGATION</li>
                <li class="<?= ($modul == '' ? 'active' : '') ?>">
                    <a href="<?php echo base_url('tes') ?>">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li> -->

                <!-- Ini untuk navigasi dropdown -->
                <!-- <li class="<?= ($modul == 'libraryMember' ? 'active' : '') ?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">library_books</i>
                        <span>Drop Down</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="#">Sub 1</a>
                        </li>
                        <li>
                            <a href="#">Sub 2</a>
                        </li>
                    </ul>
                </li> -->

                <!-- MENUS FOR SUPER ADMIN -->

                <?php if($this->session->userdata('level') == 'super admin'):?>
                <li class="<?= ($modul == 'index' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Super_Admin">
                        <i class="material-icons">library_books</i>
                        <span>Daftar Pemilih</span>
                    </a>
                </li>
                <li class="<?= ($modul == 'tambahPemilih' || $modul == 'selectPemilih' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Super_admin/tambahPemilih">
                        <i class="material-icons">add_circle</i>
                        <span>Tambah Pemilih</span>
                    </a>
                </li>
                <li class="<?= ($modul == 'verifikasiAnggota' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Super_admin/verifikasiAnggota">
                        <i class="material-icons">verified_user</i>
                        <span>Verivikasi Anggota</span>
                    </a>
                </li>
                <li class="<?= ($modul == 'tambahAnggota' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Super_admin/tambahAnggota">
                        <i class="material-icons">person_add</i>
                        <span>Tambah Anggota</span>
                    </a>
                </li>
                <li class="<?= ($modul == 'infoTeam' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Super_admin/infoTeam">
                        <i class="material-icons">group</i>
                        <span>Info Tim Sukses</span>
                    </a>
                </li>
                <?php foreach ($count as $key) { ?>
                <li class="<?= ($modul == 'pemilihMamajang' || $modul == 'pemilihMariso' || $modul == 'pemilihTamalate' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Super_admin/pemilihMamajang">
                        <i class="material-icons">developer_board</i>
                        <span>Total Pemilih</span>
                        <span class="badge bg-green"><?= $key->total?></span>
                    </a>
                <?php } ?>
                    <ul class="ml-menu">
                        <?php foreach ($count1 as $key) { ?>
                        <li class="<?= ($modul == 'pemilihMamajang' ? 'active' : '') ?>">
                           <a href="<?=site_url()?>Super_admin/pemilihMamajang">
                               <!-- <i class="material-icons">developer_board</i> -->
                               <span>Kec. Mamajang</span>
                               <span class="badge bg-teal"><?= $key->total?></span>
                           </a>                            
                        </li>
                        <?php } ?>
                        <?php foreach ($count2 as $key) { ?>                        
                        <li class="<?= ($modul == 'pemilihMariso' ? 'active' : '') ?>">
                           <a href="<?=site_url()?>Super_admin/pemilihMariso">
                               <!-- <i class="material-icons">developer_board</i> -->
                               <span>Kec. Mariso</span>
                               <span class="badge bg-orange"><?= $key->total?></span>
                           </a> 
                        </li>
                        <?php } ?>
                        <?php foreach ($count3 as $key) { ?>   
                        <li class="<?= ($modul == 'pemilihTamalate' ? 'active' : '') ?>">
                           <a href="<?=site_url()?>Super_admin/pemilihTamalate">
                               <!-- <i class="material-icons">developer_board</i> -->
                               <span>Kec. Tamalate</span>
                               <span class="badge bg-cyan"><?= $key->total?></span>
                           </a> 
                        </li> 
                        <?php } ?>                          
                    </ul>
                </li>
                <li class="<?= ($modul == 'profile' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Super_admin/profile">
                        <i class="material-icons">group</i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>login/logout" data-close="true">
                        <i class="material-icons">power_settings_new</i>
                        <span>Log Out</span>
                    </a>
                </li>
                <!-- END MENUS FOR SUPER ADMIN -->


                <!-- MENUS FOR ADMIN KELURAHAN-->

                <?php elseif($this->session->userdata('level') == 'admin kelurahan'):?>
                <!-- <li class="<?= ($modul == 'daftarTeam' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Admin_kelurahan/daftarTeam">
                        <i class="material-icons">developer_board</i>
                        <span>Daftar Tim Sukses</span>
                    </a>
                </li> -->
                <li class="<?= ($modul == 'index' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Admin_kelurahan">
                        <i class="material-icons">library_books</i>
                        <span>Daftar Pemilih</span>
                    </a>
                </li>
                <li class="<?= ($modul == 'tambahPemilih' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Admin_kelurahan/tambahPemilih">
                        <i class="material-icons">add_circle</i>
                        <span>Tambah Pemilih</span>
                    </a>
                </li>
                <li class="<?= ($modul == 'infoTeam' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Admin_kelurahan/infoTeam">
                        <i class="material-icons">group</i>
                        <span>Anggota Tim</span>
                    </a>
                </li>
           <!--      <li class="<?= ($modul == '' ? 'active' : '') ?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">developer_board</i>
                        <span>Progress Anggota</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                           <a href="javascript:void(0);">
                               <i class="material-icons">developer_board</i>
                               <span>RT 01</span>
                           </a> 
                        </li>
                        <li>
                           <a href="javascript:void(0);">
                               <i class="material-icons">developer_board</i>
                               <span>RT 02</span>
                           </a> 
                        </li>   
                        <li>
                           <a href="javascript:void(0);">
                               <i class="material-icons">developer_board</i>
                               <span>RT 03</span>
                           </a> 
                        </li>                           
                    </ul>
                </li> -->
                <li class="<?= ($modul == 'profile' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Admin_kelurahan/profile">
                        <i class="material-icons">group</i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>login/logout" data-close="true">
                        <i class="material-icons">power_settings_new</i>
                        <span>Log Out</span>
                    </a>
                </li>
                <!-- END MENUS FOR ADMIN KELURAHAN-->

                <!-- MENUS FOR ADMIN ANGGOTA-->
                <?php elseif($this->session->userdata('level') == 'admin anggota'):?>
                <li class="<?= ($modul == 'index' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Admin_anggota">
                        <i class="material-icons">library_books</i>
                        <span>Daftar Pemilih</span>
                    </a>
                </li>
                <li class="<?= ($modul == 'tambahPemilih' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Admin_anggota/tambahPemilih">
                        <i class="material-icons">add_circle</i>
                        <span>Tambah Pemilih</span>
                    </a>
                </li>
                <li class="<?= ($modul == 'profile' ? 'active' : '') ?>">
                    <a href="<?=site_url()?>Admin_anggota/profile">
                        <i class="material-icons">group</i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>login/logout" data-close="true">
                        <i class="material-icons">power_settings_new</i>
                        <span>Log Out</span>
                    </a>
                </li>
                <!-- END MENUS FOR ADMIN ANGGOTA-->
                <?php endif; ?>
            <!-- END IF FOR NAV SESSION -->

            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; <a href="javascript:void(0);">CONFIE</a>.
            </div>
            <div class="version">
                <b>Version: </b> 0.1.1
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <!-- <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside> -->
    <!-- #END# Right Sidebar -->
</section>