<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Mycss -->
    <link href="<?= base_url(); ?>assets/css/login.css" rel="stylesheet">

    <!-- boostrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    s

    <title>Form Login</title>

</head>

<body class="login-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mr-3">
                <h1 style="color: black ; font-weight:600;">Log In </h1>
                <br>
            </div>
            <div class="row justify-content-center mt-1 pt-lg-2 ml-lg-5 pl-lg-5">
                <div class="col-md-6">
                    <!-- untuk gambar -->
                    <!-- <img src="<?php echo base_url(); ?>assets/image/login.png"> -->
                    <!-- animasi -->
                    <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_jcikwtux.json" background="transparent" speed="2" style="width: 300px; height: 300px;" loop autoplay></lottie-player>


                </div>
                <div class="col-md-6">
                    <div class="card o-hidden border-0 shadow-lg" style="width:400px">
                        <div class="card-body">
                            <?php
                            if ($this->session->flashdata('error') != '') {
                                echo '<div class="alert alert-danger" role="alert">';
                                echo $this->session->flashdata('error');
                                echo '</div>';
                            }
                            ?>

                            <?php
                            if ($this->session->flashdata('success_register') != '') {
                                echo '<div class="alert alert-info" role="alert">';
                                echo $this->session->flashdata('success_register');
                                echo '</div>';
                            }
                            ?>
                            <form method="post" action="<?php echo base_url(); ?>index.php/login/proses">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        <div class="card-footer o-hidden border-0 text-center">
                            Belum mempunyai akun?
                            <br><a href="<?php echo site_url('register') ?>">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


</body>

</html>