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
    <link href="<?= base_url(); ?>assets/css/museum.css" rel="stylesheet">





    <title>Museum | Bandung </title>
</head>

<body>



    <!-- section untuk header -->
    <div class="hero">
        <!-- animasi  -->
        <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_sfzrczun.json" mode="bounce" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
        <!-- maps transparant -->
        <img src="<?php echo base_url(); ?>assets/image/museum.jpg" class="gambar">

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
            <h3>Museum</h3>

        </div>
    </div>
    <!-- akhir header -->

    <!-- section judul -->

    <section id="judul">
        <div class="row">
            <div class="twelve">
                <h1>Daftar museum bandung</h1>
                <p>Ada berbagai wisata yang bisa ditemukan di Bandung. Dari wisata alam terbuka, wisata edukasi, hingga wisata museum yang sangat mendidik.

                    Namun, di Bandung tidak terdapat wisata pantai. Tapi terdapat berbagai sungai, kawah, pegunungan, dan wisata menarik lainnya. Salah satunya adalah destinasi wisata edukasi berupa museum-museum yang dapat memberikan pengunjung informasi baru.

                    Bandung memiliki beragam museum yang tersebar di seluruh penjuru kota Bandung. Jika Anda berkunjung ke Bandung, jangan lupa untuk mengunjungi salah satu museum yang ada di sana. Berikut daftar museum terbaik yang ada di Bandung:</p>
            </div>
        </div>
    </section>
    <!-- section awal -->
    <section id="awal">
        <!-- BARIS 1 -->
        <div class="row">
            <!-- museum 1 -->
            <div class="four columns main-col asia">
                <img src="<?php echo base_url(); ?>assets/image/asia2.jpg">
                <div class="item-text">

                    <p class="item-ttl">Museum Asia Afrika</p>
                    <hr>
                </div>

            </div>

            <!-- museum 2 -->
            <div class="four columns main-col geologi">
                <img src="<?php echo base_url(); ?>assets/image/geologi.png">
                <div class="item-text">

                    <p class="item-ttl">Museum Geologi</p>
                    <hr>
                </div>

            </div>
            <!-- museum 3 -->
            <div class="four columns main-col pos">
                <img src="<?php echo base_url(); ?>assets/image/pos.jpg">
                <div class="item-text">
                    <p class="item-ttl">Museum Pos indonesia</p>
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
            <!-- museum 1 -->
            <div class="four columns main-col barli">
                <img src="<?php echo base_url(); ?>assets/image/barli.jpg">
                <div class="item-text">

                    <p class="item-ttl">Museum Barli</p>
                    <hr>
                </div>

            </div>

            <!-- museum 2 -->
            <div class="four columns main-col iptek">
                <img src="<?php echo base_url(); ?>assets/image/iptek.jpg">
                <div class="item-text">

                    <p class="item-ttl">Museum IPTEK</p>
                    <hr>
                </div>

            </div>
            <!-- museum 3 -->
            <div class="four columns main-col sri">
                <img src="<?php echo base_url(); ?>assets/image/sri1.jpg">
                <div class="item-text">
                    <p class="item-ttl">Museum Sri baduga</p>
                    <hr>
                </div>

            </div>
        </div>
    </section>


    <!-- content untuk baris ke 3 -->
    <section id="awal">
        <!-- BARIS 2 -->
        <div class="row">
            <!-- museum 1 -->
            <div class="four columns main-col barli">
                <img src="<?php echo base_url(); ?>assets/image/wangsit.jpg">
                <div class="item-text">

                    <p class="item-ttl">Mandala Wangsit Siliwangi</p>
                    <hr>
                </div>

            </div>

            <!-- museum 2 -->
            <div class="four columns main-col iptek">
                <img src="<?php echo base_url(); ?>assets/image/art.jpeg">
                <div class="item-text">

                    <p class="item-ttl">Museum Amazing Art World</p>
                    <hr>
                </div>

            </div>
            <!-- museum 3 -->
            <div class="four columns main-col sri">
                <img src="<?php echo base_url(); ?>assets/image/gs.jpg">
                <div class="item-text">
                    <p class="item-ttl">Museum Gedung Sate</p>
                    <hr>
                </div>

            </div>
        </div>
    </section>


    <!-- content untuk baris ke 4 -->
    <section id="awal">
        <!-- BARIS 2 -->
        <div class="row">
            <!-- museum 1 -->
            <div class="four columns main-col barli">
                <img src="<?php echo base_url(); ?>assets/image/kb.jpg">
                <div class="item-text">

                    <p class="item-ttl">Museum Kota Bandung</p>
                    <hr>
                </div>

            </div>

            <!-- museum 2 -->
            <div class="four columns main-col iptek">
                <img src="<?php echo base_url(); ?>assets/image/ka.jpg">
                <div class="item-text">

                    <p class="item-ttl">Museum Kereta Api </p>
                    <hr>
                </div>

            </div>
            <!-- museum 3 -->
            <div class="four columns main-col sri">
                <img src="<?php echo base_url(); ?>assets/image/pn.jpg">
                <div class="item-text">
                    <p class="item-ttl">Museum Pendidikan Nasional</p>
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