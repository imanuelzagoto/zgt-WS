<body class="bg-gradient-success">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">

                 <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg bg-gradient-success">
                        <div class="p-5">
                            <div class="text-center">
                                <img class="sidebar-card-illustration btn-success mb-2" src="<?php echo base_url() ?>assets/img/w.svg" width="120" height="50">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Akun!</h1>
                    </div>
                        <form class="user" method="post" action="<?= base_url('auth/registrasi') ?>">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="nama" placeholder="Full name..." name="nama">
                                                <?= form_error('username', '<div class="text-danger small ml-2" >', '</div>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="username" placeholder="Username..." name="username">
                                                <?= form_error('username', '<div class="text-danger small ml-2" >', '</div>'); ?>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3mb-sm-0 ">
                                                    <input type="password" class="form-control form-control-user" id="password1" placeholder="Password.." name="password1">
                                                    <?= form_error('password', '<div class="text-danger small ml-2" >', '</div>'); ?>
                                                </div>
                                                <div class="col-sm-6 mb-3mb-sm-0 ">
                                                    <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat password" name="password2">
                                                    <?= form_error('password2', '<div class="text-danger small ml-2" >', '</div>'); ?>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                                        </form>
                            <hr>
                        <div class="text-center">
                    <a class="small" href="<?php echo base_url('auth/login'); ?>"><font color="ffffff">Sudah Punya Akun? Silahkan Login!</font></a>
                </div>
              </div>
            </div>
          </div>
         </div>
        </div>
      </div>
    </body>

