<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/mystyle.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Font Style -->
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap");
    </style>

    <title>Amikom Exhibition</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top p-3 mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url(); ?>assets/img/logo.png" alt="" width="30" height="30">&nbsp;&nbsp;Amikom
                Exhibition</a></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url(); ?>gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>karya">Chart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>tambah">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>donate">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>Logout" onclick="let timerInterval
Swal.fire({
  title: 'See You!',
  html: 'I will close in <b></b> milliseconds.',
  timer: 1000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 3)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('That was a wonderful journey!')
  }
})">Log Out</a>
                        <script src="js/sweetalert2.all.min.js"></script>
                    </li>
                    <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Carousel -->

    <!-- Akhir Carousel -->


    <!--  ====================== Art in Indo ======================  -->
    <section class="about-area">
        <div class="container">
            <div class="row text-left">
                <div class="col-12">
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="about-title ">
                        <h1 class="text-uppercase title-h1">Painting Art in Indonesia</h1>
                        <p class="para">
                            Art world in Indonesia is highly appreciated. No wonder, if
                            there is many local paintings that are very famous in all over
                            the world. Famous paintings from Indonesia are not only famous
                            in the country, but also known abroad. Indonesia has cultural
                            diversity and has a high cultural value. In addition, painters
                            from Indonesia have also been known in the eyes of the world,
                            just like Abdulah, S.Mamala, and Effendy. Here are famous
                            paintings in Indonesia, which are not only known in Indonesia
                            but also abroad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($data as $key) : ?>
        <div class="container carousel py-lg-5">
            <div class="owl-carousel owl-theme">
                <div class="client row">
                    <div class="col-lg-4 col-md-12 client-img">
                        <img src="<?php echo base_url('./assets/userfile_karya/' . $key->gambar . ''); ?>"
                            width="300px">
                    </div>
                    <div class="col-lg-8 col-md-12 about-client">
                        <h4 class="text-uppercase"><?php echo $key->judul;?></h4>
                        <p class="para">
                            Artist: <?php echo $key->artis; ?>
                        </p>
                        <p class="para">
                            <?php echo $key->deskripsi; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
    <!--  ====================== Akhir Art in Indo =============================  -->

    </main>

    <!-- ====================== Akhir Content ====================== -->

    <!-- Footer -->
    <footer>
        <div class="container-fluid" style="background-color: whitesmoke">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col text-center">
                        <div class="mb-3 mt-5">
                            <img src="<?= base_url(); ?>assets/img/logo.png" width="150" alt="" />
                            <h1 style="color: black">Amikom Exhibition</h1>
                        </div>
                        <div class="container w-75 d-flex justify-content-between mb-3">
                            <p style="color: black">
                                Amikom Exhibition is the largest art exhibition in Asia that can be accessed
                                online as a forum for inspiration during the COVID-19 pandemic. The exhibition
                                is managed by the Indonesian Cultural Student Association.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-white p-3" style="background-color: #cad9df">
            <a class="text-white" href="https://mdbootstrap.com/" style="text-decoration: none">
                <p style="color: black">© 2021 Copyright: Amikom Exhibition</p>
            </a>
            <p style="color: black">
                <i>source : https://unsplash.com/ || https://www.freepik.com/ ||
                    https://storyset.com/ || https://getwaves.io/</i>
            </p>
        </div>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>