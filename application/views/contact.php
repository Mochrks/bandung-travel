<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Mycss -->
    <link href="<?= base_url(); ?>assets/css/contactUs.css" rel="stylesheet">

    <!-- boostrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <title>Contact Us</title>
</head>

<body>
    <!-- kontak -->

    <section id="contact">
        <div class="container py-5 contact1">
            <div class="row text-center">
                <div class="col mb-5 pt-5">
                    <h2 style=" font-weight:600;">Contact Us</h2>

                </div>
            </div>

            <div class="row justify-content-center">
                <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_wbszjekz.json" mode="bounce" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
                <div class="col-md-6 py-4">
                    <div class="alert alert-success alert-dismissible fade show Myalert d-none" role="alert">
                        <strong>Thank you !</strong> Pesan anda telah dikirim.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form name="contact-form">
                        <div class="mb-3 ml-5">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" placeholder="Masukan nama anda" required>
                        </div>
                        <div class="mb-3 ml-5">
                            <label for="email" class="form-label">Email </label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Masukan email anda" required>
                        </div>
                        <div class="mb-3 ml-5">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3" name="pesan" placeholder="Masukan pesan anda" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-kirim ml-5">Kirim</button>

                        <button class="btn btn-primary btn-loading ml-5 d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>




    <!-- animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


    <!-- java script untuk form contact -->
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbxpgs5FcAsPEbcaEpAjyb2ydn0DyKQ-LHh9DVjVOAoHeeY9_Ilkl9rs30mz6LHQx90JgQ/exec'
        const form = document.forms['contact-form'];
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const Myalert = document.querySelector('.Myalert');

        form.addEventListener('submit', e => {
            e.preventDefault();

            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');


            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    btnLoading.classList.toggle('d-none');
                    btnKirim.classList.toggle('d-none');
                    Myalert.classList.toggle('d-none');
                    console.log('Success!', response)

                    // reset form
                    form.reset();
                })
                .catch(error => console.error('Error!', error.message))
        });
    </script>
</body>

</html>