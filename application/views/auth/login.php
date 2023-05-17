<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-gradient-warning ">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">


                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row align-items-end justify-content-center ">
                            <img src="<?= base_url('assets/logo.png'); ?>" alt="Logo" height="150">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="p-1">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 mt-4">POSPEN LOGIN</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user mx-auto" method="POST" action="<?= base_url('auth'); ?>">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>');  ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>');  ?>
                                        </div>
                                        <button type="submit" class="btn btn-warning btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small text-warning" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small text-warning" href="<?= base_url('auth/register_options'); ?>">Create an Account!</a>
                                    </div>
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

</html>