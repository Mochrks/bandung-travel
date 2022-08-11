<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Mycss -->
    <link href="<?= base_url(); ?>assets/css/layouting.css" rel="stylesheet">




    <title>Go | Bandung</title>
</head>

<body>
    <div class="hero">
        <!-- <img src="<?php echo base_url(); ?>assets/image/landingbg.png" class="gambar"> -->

        <!-- latar video -->
        <video autoplay loop muted plays-inline class="back-video">
            <source src="<?php echo base_url(); ?>assets/video/Bandung1.mp4" type="video/mp4">
        </video>



        <!-- navbar menu -->
        <div class=" nav">

            <div class="logo">
                <img src="<?php echo base_url(); ?>assets/image/logoBr.png">

            </div>

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="<?php echo site_url('paket/') ?>">Guide</a></li>
                <li><a href="<?php echo site_url('about/') ?>">About us</a></li>
                <li><a href="<?php echo site_url('contact/') ?>">Contact Us</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/login/logout" class="logout">Logout</a></li>

            </ul>

            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>



        <!-- content -->
        <div class="content">


            <h5>Welcome ! , <?php echo $this->session->userdata('nama'); ?></h5>
            <h1>BANDUNG</h1>
            <!-- logo gambar -->


            <a href="<?php echo site_url('explore/') ?>">Explore</a>
        </div>


    </div>


    </div>

    <!--  untuk java script-->
    <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/script.js"></script>


    <!-- script animasi -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>