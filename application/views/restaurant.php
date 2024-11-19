<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- Mobile Specific Metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- css responsive -->

    <link href="<?= base_url(); ?>assets/css/default.css" rel="stylesheet">


    <!-- Mycss -->
    <link href="<?= base_url(); ?>assets/css/restaurant.css" rel="stylesheet">





    <title>Restaurant | Bandung </title>
</head>

<body>



    <!-- section untuk header -->
    <div class="hero">
        <!-- animasi  -->
        <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_r4ykplqw.json" mode="bounce"
            background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
        <!-- maps transparant -->
        <img src="<?php echo base_url(); ?>assets/image/restorant.jpg" class="gambar">

        <!-- navbar menu -->
        <div class="nav">
            <div class="logo">
                <img src="<?php echo base_url(); ?>assets/image/logoBr.png">
            </div>

            <ul>
                <li><a href="<?php echo site_url('landing/') ?>">Home</a></li>
                <li><a href="<?php echo site_url('paket/') ?>">Guide</a></li>
                <li><a href="<?php echo site_url('about/') ?>">About us</a></li>
                <li><a href="<?php echo site_url('contact/') ?>">Contact </a></li>
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
            <h3>Restaurant</h3>

        </div>
    </div>
    <!-- akhir header -->

    <!-- section judul -->

    <section id="judul">
        <div class="row">
            <div class="twelve">
                <h1>Daftar Restaurant bandung</h1>
                <p>Mendatangi tempat makan hits di Bandung merupakan sebuah keharusan bila sedang berlibur ke kota bunga
                    tersebut. Ada banyak destinasi kuliner yang sudah legendaris maupun spot baru yang tengah ramai
                    dikunjungi oleh kawula mudanya.

                    Daftar referensi di bawah ini juga variatif dari segi konsep tempat hingga harga menunya. Kamu bisa
                    mendatangi setiap tempatnya untuk makan cepat maupun nongkrong selama berjam-jam dengan orang
                    terdekat.</p>
            </div>
        </div>
    </section>
    <!-- section awal -->
    <section id="awal">
        <!-- BARIS 1 -->
        <div class="row">

            <div class="four columns main-col asia">
                <img src="<?php echo base_url(); ?>assets/image/atmos.jpg">
                <div class="item-text">

                    <p class="item-ttl">Atmosphere Resort Cafe</p>
                    <hr>
                </div>

            </div>


            <div class="four columns main-col geologi">
                <img src="<?php echo base_url(); ?>assets/image/bela3.png">
                <div class="item-text">

                    <p class="item-ttl"> Bellamie Boulangerie</p>
                    <hr>
                </div>

            </div>

            <div class="four columns main-col pos">
                <img src="<?php echo base_url(); ?>assets/image/boda2.png">
                <div class="item-text">
                    <p class="item-ttl">Boda Barn</p>
                    <hr>
                </div>

            </div>
        </div>


    </section>
    <!-- akhir section -->
    <!-- content untuk baris ke 2 -->
    <section id="awal">
        <!-- BARIS 2 -->
        <div class="row">

            <div class="four columns main-col barli">
                <img src="<?php echo base_url(); ?>assets/image/cakra.jpg">
                <div class="item-text">

                    <p class="item-ttl">Cakrawala Sparkling Nature Resto</p>
                    <hr>
                </div>

            </div>


            <div class="four columns main-col iptek">
                <img src="<?php echo base_url(); ?>assets/image/congo.jpg">
                <div class="item-text">

                    <p class="item-ttl">Congo Gallery & Cafe</p>
                    <hr>
                </div>

            </div>

            <div class="four columns main-col sri">
                <img src="<?php echo base_url(); ?>assets/image/food1.jpg">
                <div class="item-text">
                    <p class="item-ttl">Food on Wall</p>
                    <hr>
                </div>

            </div>
        </div>
    </section>

    <!-- content untuk baris ke 3 -->
    <section id="awal">
        <!-- BARIS 2 -->
        <div class="row">

            <div class="four columns main-col barli">
                <img src="<?php echo base_url(); ?>assets/image/gc1.jpg">
                <div class="item-text">

                    <p class="item-ttl"> Garden Coffee</p>
                    <hr>
                </div>

            </div>


            <div class="four columns main-col iptek">
                <img src="<?php echo base_url(); ?>assets/image/gm.jpg">
                <div class="item-text">

                    <p class="item-ttl"> Gormeteria</p>
                    <hr>
                </div>

            </div>

            <div class="four columns main-col sri">
                <img src="<?php echo base_url(); ?>assets/image/gb22.jpg">
                <div class="item-text">
                    <p class="item-ttl">Got Beef</p>
                    <hr>
                </div>

            </div>
        </div>
    </section>

    <!-- content untuk baris ke 4 -->
    <section id="awal">
        <!-- BARIS 2 -->
        <div class="row">

            <div class="four columns main-col barli">
                <img src="<?php echo base_url(); ?>assets/image/cs.jpg">
                <div class="item-text">

                    <p class="item-ttl"> Glosis Resto</p>
                    <hr>
                </div>

            </div>


            <div class="four columns main-col iptek">
                <img src="<?php echo base_url(); ?>assets/image/21.jpg">
                <div class="item-text">

                    <p class="item-ttl">Hara Cafe and Resto</p>
                    <hr>
                </div>

            </div>

            <div class="four columns main-col sri">
                <img src="<?php echo base_url(); ?>assets/image/23.jpg">
                <div class="item-text">
                    <p class="item-ttl">House of Tjihapit</p>
                    <hr>
                </div>

            </div>
        </div>
    </section>






    <!--  untuk java script-->
    <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/script.js"></script>


    <!-- script untuk animasi -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>

</html>