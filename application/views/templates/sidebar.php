<body id="page-top" background="#ffff00">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="welcome">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store" style="color: yellow"></i></div>
                     <div class="sidebar-brand-text mx-2 bg-gradient-success"><font class="00ff00">Warung</font> <sup>.com</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url ('welcome')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KATEGORI
            </div>


            <!-- Nav Item - Tables -->
          

               <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('kategori/semua_promo')?>">
                    <img class="sidebar-card-illustration mb-2" src="<?php echo base_url() ?>assets/img/sign.svg" width="30" height="30">
                    <span>Semua Promo</span></a>
            </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('kategori/sayuran')?>">
                    <img class="sidebar-card-illustration mb-2" src="<?php echo base_url() ?>assets/img/healthy-food.svg" width="30" height="30">
                    <span>sayuran & Buah</span></a>
            </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('kategori/makanan')?>">
                    <img class="sidebar-card-illustration mb-2" src="<?php echo base_url() ?>assets/img/can.svg" width="35" height="35">
                    <span>Makanan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('kategori/minuman')?>">
                    <img class="sidebar-card-illustration mb-2" src="<?php echo base_url() ?>assets/img/mineral-water.svg" width="35" height="35">
                    <span>Minuman</span></a>
            </li>


              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('kategori/bahan')?>">
                   <img class="sidebar-card-illustration mb-2" src="<?php echo base_url() ?>assets/img/diet.svg" width="30" height="30">
                    <span>Bahan Pokok dan dapur</span></a>
            </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('kategori/olahan_telur')?>">
                    <img class="sidebar-card-illustration mb-2" src="<?php echo base_url() ?>assets/img/diet-food.svg" width="30" height="30">
                    <span>Olahan Telur & Susu</span></a>
            </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('kategori/daging')?>">
                    <img class="sidebar-card-illustration mb-2" src="<?php echo base_url() ?>assets/img/fish.svg" width="30" height="30">
                    <span>Daging,ayam,& seafood</span></a>
            </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('kategori/sosis')?>">
                    <img class="sidebar-card-illustration mb-2" src="<?php echo base_url() ?>assets/img/salami.svg" width="30" height="30">
                    <span>Olahan Daging</span></a>
              </li>

             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url ('kategori/semua_kategori')?>">
                    <img class="sidebar-card-illustration mb-2" src="<?php echo base_url() ?>assets/img/groceries.svg" width="30" height="30">
                    <span>Semua Kategori</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="<?php echo base_url() ?>assets/img/w.svg" alt="" width="100" height="100">
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php
                                     $keranjang = 'Keranjang Belanja:  '.$this->cart->total_items(). 
                                     ' items' 
                                     ?>

                                     <?php echo anchor('dashboard/detail_keranjang', $keranjang )  ?>
                                </li>
                            </ul>

                             <div class="topbar-divider d-none d-sm-block"></div>

                        <ul class="nav navbar-nav navbar-right">
                            <?php if($this->session->userdata('username')) { ?>
                                <li  class="mt-2"><div>Selamat Datang : <?php echo $this->session->userdata('username') ?></div></li>
                                <div class="topbar-divider d-none d-sm-block"></div>
                                <li  class="mt-2"><?php echo anchor('auth/logout','Logout'); ?></li> <?php } else { ?> 
                                <li><?php echo anchor('auth/login', 'Login'); ?></li>
                            <?php } ?>
                    </ul>
                </div>
            </nav>
                <!-- End of Topbar -->