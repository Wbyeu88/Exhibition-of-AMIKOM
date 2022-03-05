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
                        <a class="nav-link active" href="<?= base_url(); ?>home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>gallery">Gallery</a>
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
    <section class="hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <!--
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            -->
            </div>
            <div class="carousel-inner">
                <!-- <div class="carousel-item">
              <img src="img/caorusel/satra.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block text-start">
                <h1 class="display-4">AMIKOM EXHIBITION</h1>
                <p class="lead">Pameran Karya Seni Terbesar se-Indonesia</p>
                <hr class="my-4">
                 <p>Ikutlah berpartisipasi mengapresiasi karya karya seniman hebat Indonesia!</p>
                 <a class="btn btn-warning btn-lg" href="#" role="button">Join Us</a>
              </div>
            </div> -->
                <!-- <div class="carousel-item">
              <img src="img/caorusel/kriya.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4">Hi, Folks!</h1>
                <p class="lead">Apa aja sih yang ingin kalian tahu tentang <b>Seni Kriya</b>? </p>
                <hr class="my-4">
                 <p>Di sini kita akan menjelajahi apapun yang ingin kalian ingin ketahui tentang <b>Seni Kriya</b></p>
                 <a class="btn btn-warning btn-lg" href="kriya.html" role="button">Let's Go!</a>
              </div>
            </div> -->
                <div class="carousel-item active">
                    <img src="<?= base_url(); ?>assets/img/caorusel/GeorgesSeurant.jpg" class="d-block w-100"
                        alt="..." />
                    <div class="carousel-caption d-none d-md-block text-end">
                        <h1 class="display-4">Hi, Folks!</h1>
                        <p class="lead">
                            What do you want to know about <b>painting</b>?
                        </p>
                        <hr class="my-4" />
                        <p>
                            We will explore whatever you want
                            to know about <b>painting</b>.
                        </p>
                        <!-- <a class="btn btn-light btn-lg" href="#" role="button">Let's Go!</a> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url(); ?>assets/img/caorusel/Pab.jpg" class="d-block w-100" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="display-4">Hi, Folks!</h1>
                        <p class="lead">
                            What do you need to know about Amikom Exhibition?
                        </p>
                        <hr class="my-4" />
                        <p>Find your inspiration with us</p>
                        <!-- <a class="btn btn-light btn-lg" href="#" role="button">Let's Go</a> -->
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Akhir Carousel -->

    <!-- ====================== Content ====================== -->
    <main class="site-main">
        <!--  ====================== About ======================  -->

        <section class="about-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="<?php echo base_url(); ?>assets/img/Body/KingPhilip IV.jpg" alt="About us"
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                        <h2 class="text-uppercase pt-5">
                            <span>Art</span>
                            <span>Gallery</span>
                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para">
                                <b>Amikom Exhibition</b> is a virtual museum and searchable
                                fine arts from the 3rd to 19th centuries. The collection has
                                some of the characteristics of a virtual museum.
                            </p>
                            <p class="para">
                                The experience of the visitors is enhanced by guided tours
                                helping to understand the artistic and historical relationship
                                between different works and artists. At the same time the
                                collection serves the visitors' need for a site where various
                                information on art, artists and history can be found together
                                with corresponding pictorial illustrations.
                            </p>
                            <p class="para">
                                Although not a conventional one, the collections a searchable
                                database supplemented by a glossary containing articles on art
                                terms, relevant historical events, personages, cities, museums
                                and churches.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ====================== Akhir About ======================  -->

        <!--  ====================== Serv ======================  -->

        <section class="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center services-title">
                        <h1 class="text-uppercase title-text">Top Famous Painting</h1>
                        <p class="para">
                            A ranking of the most famous paintings—from Jan van Eyck's
                            portrait to Gustav Klimt's masterpiece.
                        </p>
                    </div>
                </div>
                <div class="container services-list">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="<?= base_url(); ?>assets/img/Body/LeonardoDVinci1.png" Services-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">
                                        Mona Lisa
                                    </h5>
                                    <p class="card-text text-secondary">
                                        Leonardo Da Vinci, Painted between 1503 and 1517.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="<?= base_url(); ?>assets/img/Body/Johannes Vermeer1.png"
                                        alt="Services-2" />
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">
                                        Girl with a Pearl
                                    </h5>
                                    <p class="card-text text-secondary">
                                        Johannes Vermeer’s, 1665.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="<?= base_url(); ?>assets/img/Body/The Arnolfini1.png" alt="Services-3" />
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">
                                        The Arnolfini
                                    </h5>
                                    <p class="card-text text-secondary">Jan van Eyck, 1434.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="<?= base_url(); ?>assets/img/Body/VincetVan1.png" alt="Services-4" />
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">
                                        The Starry Night
                                    </h5>
                                    <p class="card-text text-secondary">
                                        Vincent van Gogh, 1889.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  ====================== Akhir Serv =======================  -->

        <!--  ====================== Art in Indo ======================  -->
        <section class="about-area">
            <div class="container">
                <div class="row text-left">
                    <div class="col-12">
                        <div class="about-title">
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

            <div class="container carousel py-lg-5">
                <div class="owl-carousel owl-theme">
                    <?php  foreach ($karya as $u) : ?>
                    <?php 
                        if ($u->status == 1) : ?>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="<?php echo base_url('./assets/userfile_karya/' . $u->gambar . ''); ?>" alt="img1"
                                class="img-fluid" />
                        </div>

                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase"><?php echo $u->judul; ?></h4>
                            <p class="para">
                                <?php echo $u->artis; ?>
                            </p>
                            <p class="para">
                                <?php echo $u->deskripsi; ?>
                            </p>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
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