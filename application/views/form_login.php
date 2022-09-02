<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12 btn-success">
                                <div class="p-5">
                                    <div class="text-center"><img class="sidebar-card-illustration bg-gradient-success mb-2" src="<?php echo base_url() ?>assets/img/w.svg" width="120" height="50">
                                        <h1 class="h4 text-gray-900 mb-4">Form Login</h1>
                                    </div>
                                    <div>
                                        <?php echo $this->session->flashdata('pesan') ?>
                                    </div>
                                    <form method="post" action="<?= base_url('auth/Login'); ?>" class="user">
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user"
                                                id="username" aria-describedby="emailHelp"
                                                placeholder="Enter username..." name="username">
                                                <?php echo form_error('username','<div class="text-danger small">','<div>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                               <?php echo form_error('username','<div class="text-danger small">','<div>'); ?>
                                        </div>

                                       <button type="submit" class="btn btn-primary form-control">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('auth/registrasi'); ?>"><font color="ffffff">Belom Punya Akun? Daftar!</font></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>