<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Mycss -->
    <link href="<?= base_url(); ?>assets/css/About.css" rel="stylesheet">

    <!-- boostrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">

    <title>About us</title>
</head>

<body>
    <!-- team -->
    <section id="team">

        <div class="container py-5 text-capitalize content">
            <div class="row-md text-center m-3 ">
                <div class="col-md">
                    <h1 style="font-family: Poppins ;font-weight: 600 ;">Our Team</h1>
                    <p style="color:white;">Dalam pembuatan aplikasi ini yaitu BandungTravel, aplikasi ini adalah aplikasi yang dapat memudahkan wisatawan yang ingin liburan ke kota bandung , dimana terdapat beberapa paket liburan yang tersedia ,selain itu juga wisatawan yang akan berlibur dapat mengetahui informasi mengenai kota bandung pada aplikasii ini seperti informasi ,museum ,taman ,restaurant dll. aplikasi ini dibuat guna memenuhi tugas matakuliah Teknologi Web <br> Dosen : Bpk. Asep Id Hadiana, S.Si., M.Kom. Aplikasi ini dibuat oleh :</p>
                </div>
            </div>
            <!-- team  -->
            <div class="row  justify-content-around text-center row2">
                <div class="col-md-3 mb-3">
                    <div class="card border-0">
                        <img src="<?php echo base_url(); ?>assets/image/eka2.png" class="card-img-top" alt="eka">
                        <div class="card-body">
                            <h5 class="card-title">AULYIA EKA PRATAMA W</h5>
                            <h5 class="card-title">3411191134</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  mb-3">
                    <div class="card border-0">
                        <img src="<?php echo base_url(); ?>assets/image/rizki2.png" class="card-img-top" alt="rizki">
                        <div class="card-body">
                            <h5 class="card-title">MOCH. RIZKI KURNIAWAN</h5>
                            <h5 class="card-title">3411191151</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3  ">
                    <div class="card border-0">
                        <img src="<?php echo base_url(); ?>assets/image/icas1.png" class="card-img-top" alt="icas">
                        <div class="card-body">
                            <h5 class="card-title">ICHAS PURNAMA</h5>
                            <h5 class="card-title">3411191132</h5>


                        </div>
                    </div>
                </div>
                <div class="col-md-3  mb-3">
                    <div class="card border-0">
                        <img src="<?php echo base_url(); ?>assets/image/sony1.png" class="card-img-top" alt="sony">
                        <div class="card-body">
                            <h5 class="card-title">SONY SANTANA</h5>
                            <h5 class="card-title">3411191154</h5>


                        </div>
                    </div>
                </div>


            </div>
            <hr>
        </div>
    </section>

    <!-- section tambahan -->

    <section id="tambahan">
        <div>
            <video autoplay loop muted plays-inline class="back-video">
                <source src="<?php echo base_url(); ?>assets/video/Bandung1.mp4" type="video/mp4">
            </video>
        </div>
    </section>


</body>

</html>