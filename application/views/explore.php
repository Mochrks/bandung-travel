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
    <link href="<?= base_url(); ?>assets/css/explore.css" rel="stylesheet">





    <title>Explore | Bandung </title>
</head>

<body>
    <!-- section untuk header -->
    <div class="hero">
        <!-- animasi maps -->
        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_svy4ivvy.json" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player>
        <!-- maps transparant -->
        <img src="<?php echo base_url(); ?>assets/image/map.png" class="gambar">
        <!-- video latar -->
        <video autoplay loop muted plays-inline class="back-video">
            <source src="<?php echo base_url(); ?>assets/video/Bandung1.mp4" type="video/mp4">
        </video>
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
            <h3>Welcome to Bandung</h3>
        </div>
    </div>
    <!-- akhir header -->




    <!-- section awal -->
    <section id="awal">

        <div class="row">

            <div class="two columns main-col">
                <img src="<?php echo base_url(); ?>assets/image/panah.png" class="panah">
            </div>

            <div class="four columns main-col">
                <p>Kota Bandung sebagai kota yang banyak dikunjungi oleh wisatawan sejak dulu.  Selain itu, Bandung memiliki berbagai potensi wisata lainnya seperti bangunan bersejarah, budayanya, serta makanan khas daerahnya. Daya tarik inilah yang menjadikan banyaknya wisatawan berdatangan ke Kota Bandung.</p>
            </div>

            <div class="three columns main-col">
                <h4>13</h4>
                <hr>
                <p>Kebudayaan | Popular</p>
            </div>
            <div class="three columns main-col">
                <h4>58</h4>
                <hr>
                <p>Destinasi wisata | popular</p>
            </div>
        </div>

    </section>
    <!-- akhir section -->


    <!-- main section -->

    <section id="maincontent">

        <div class="row">

            <div class="six columns main-col">

                <h3>Panduan Wisata</h3>
                <h3>Bandung </h3>

                <p>Bandung, salah satu kota tujuan wisata terbesar di Indonesia. Kota Bandung dikenal juga sebagai ibukota provinsi Jawa Barat. Banyak sebutan yang melekat pada kota Bandung. Diantaranya ialah sebutan Kota Kembang dan Paris van Java. Jutaan turis berkunjung ke Bandung setiap tahunnya. Menurut pak walikota Ridwan Kamil, hampir 7 juta wisatawan yang tiap tahun mengunjungi kota terbesar di Jawa Barat ini.</p>
            </div>

            <div class="six columns main-col">

                <h2>Wisata</h2>
                <hr>

                <p>Banyaknya daerah tujuan wisata di Bandung menjadi salah satu faktor daya tarik untuk para turis. Mulai dari destinasi wisata kuliner, wisata alam, hingga wisata di tengah kota Bandung. Posisi demografis Bandung terletak di dataran tinggi. Oleh sebab itu, udara di kota ini sangat sejuk.</p>
                <a href="<?php echo site_url('wisata/') ?>">
                    <svg width="40" height="40" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M52.5 52.5L17.5 17.5M23.3333 52.5H52.5V23.3333" stroke="black" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />s
                    </svg>
                </a>

            </div>

        </div>

    </section>
    <!-- akhir section -->


    <!-- section content museum-->
    <section id="content">

        <div class="row">

            <div class="six columns gambar">

                <img src="<?php echo base_url(); ?>assets/image/gambar 1.png" class="gambar">

            </div>

            <div class="six columns main-col museum">

                <h2>Museum</h2>
                <hr>
                <p>Bandung memang menyimpan begitu banyak pesona wisata yang memukau. Berbagai tempat rekreasi seperti taman, pantai, hingga wisata lainnya.Selain wisata alam , kamu juga bisa menikmati berbagai wisata sejarah di museum nya.. </p>
                <a href="<?php echo site_url('museum/') ?>">
                    <svg width="40" height="40" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M52.5 52.5L17.5 17.5M23.3333 52.5H52.5V23.3333" stroke="white" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />s
                    </svg>
                </a>

            </div>

        </div>

    </section>
    <!-- akhir section content-->


    <!-- section content museum-->
    <section id="content2">

        <div class="row">

            <div class="six columns main-col restaurant">

                <h2>Restaurant</h2>
                <hr>
                <p>Banyaknya tempat makan di Bandung ini dikarenakan beberapa faktor, yakni karena di Bandung ada banyak sekali tempat wisata menarik, baik itu wisata alam hingga wisata edukasi. Selain itu, Bandung juga dipenuhi dengan populasi anak muda sehingga ada banyak wisata kuliner kekinian yang semakin menjamur setiap harinya. </p>
                <a href="<?php echo site_url('restaurant/') ?>">
                    <svg width="40" height="40" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M52.5 52.5L17.5 17.5M23.3333 52.5H52.5V23.3333" stroke="black" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>

            <div class="six columns gambar">

                <img src="<?php echo base_url(); ?>assets/image/gambar 2.png" class="gambar">





            </div>

        </div>

    </section>
    <!-- akhir section content-->

    <!-- section bandros -->

    <section id="bandros">

        <div class="row">

            <div class="six columns main-col">

                <h3>Bandros<br>[ Bandung Tour On Bus <br>Tours</h3>


                <p>Bandros Bandung adalah salah satu sarana dari pemerintah kota Bandung untuk wisatawan yang ingin berkeliling kota Bandung dalam satu waktu.

                    Pasti Anda sangat tertarik bukan bagaimana bisa mengelilingi kota Bandung yang luas ini hanya dengan satu waktu saja?</p>

            </div>

            <div class="six columns main-col">

                <h2>08.00 - 16.00 WIB</h2>
                <hr>
                <h5>Jadwal Operasional</h5>

                <p>Untuk Anda yang ingin menikmati keindahan kota Bandung dengan naik Bandros Bandung , Anda bisa mengatur jadwal bepergian Anda dengan jam operasional yang dimiliki oleh pengelola bus Bandros.</p>


            </div>

        </div>

    </section>




    <!-- akhir bandros -->


    <!-- section popular -->

    <section id="popular">
        <div class="row">
            <div class="twelve columns header">
                <h3>Popular</h3>

            </div>
            <div class="row">

                <div class="three columns main-col">

                    <h4>Taman</h4>
                    <h5>Taman Musik Centrum</h5>
                    <h5>Taman Fotografi</h5>
                    <h5>Taman Film</h5>
                    <h5>Taman Pustaka Bunga</h5>
                    <h5>Taman Anak Tongkeng</h5>
                    <h5>Taman Jomblo</h5>
                    <h5>Taman Pasupati</h5>
                    <h5>Taman Fitness</h5>

                </div>
                <div class="three columns main-col">

                    <h4>Restaurant</h4>
                    <h5>Pago Restaurant</h5>
                    <h5>Street Grill & Friends</h5>
                    <h5>Paviliun Sunda</h5>
                    <h5>One Eighty Coffee & Music</h5>
                    <h5>Kalpa Tree Cafe</h5>
                    <h5>Gormeteria</h5>
                    <h5>Miss Bee Providore</h5>
                    <h5>Sejiwa Coffee</h5>


                </div>
                <div class="three columns main-col">

                    <h4>Museum</h4>
                    <h5>Museum Pos Indonesia</h5>
                    <h5>Museum Wolff Shoemaker</h5>
                    <h5>Museum Konferensi Asia Afrika</h5>
                    <h5>Museum Kereta Api</h5>
                    <h5>Museum Barli</h5>
                    <h5>Museum Puspa IPTEK </h5>
                    <h5>Museum Geologi</h5>
                    <h5>Museum Pendidikan Nasional</h5>

                </div>
                <div class="three columns main-col">

                    <h4>Wisata</h4>
                    <h5>Kampung Cai Ranca Upas</h5>
                    <h5>Lembang Park & Zoo</h5>
                    <h5>Orchid Forest Cikole</h5>
                    <h5>Kawah Putih Ciwidey</h5>
                    <h5>The Lodge Maribaya</h5>
                    <h5>Floating Market Lembang</h5>
                    <h5>Glamping Lakeside Rancabali</h5>
                    <h5>Farmhouse Lembang</h5>

                </div>

            </div>
            <br>
            <br>

    </section>





    <!--  untuk java script-->
    <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/script.js"></script>


    <!-- script untuk animasi -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>

</html>