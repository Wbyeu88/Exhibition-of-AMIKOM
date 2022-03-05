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
                        <a class="nav-link" href="<?= base_url(); ?>gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>karya">Chart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>tambah">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>donate">Donate</a>
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
    <!-- ====================== Content ====================== -->
    <main class="site-main">
        <!--  ====================== Donation ======================  -->

        <section class="about-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-12 about-title">
                        <h2 class="text-uppercase pt-5">
                            <b>Donate to Amikom</b>
                            <b>Exhibition</b>
                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para">
                                Your donation today plays a vital role in Amikom Exhibition's
                                future, and we couldn't be more grateful. <b>Thank you.</b>
                            </p>
                            <form class="form-inline" action="<?= base_url('donate/prosesDonasi') ?>" method="post"
                                id="donation-form" enctype="multipart/form-data">
                                <div class="form-group font-roboto">
                                    <!-- Email
                                    <input class="form-control" type="email" name="email" size="50" /> -->
                                    <!-- Username
                                    <input class="form-control" type="text" name="username" size="50" />
                                    Phone Number
                                    <input class="form-control" type="tel" name="phone" size="13" /> -->
                                    Amount
                                    <input class="form-control" type="number" name="amount" placeholder="IDR"
                                        size="20" />
                                    Donation Note
                                    <textarea rows="3" class="form-control" name="donationNote" size="255"></textarea>
                                    Payment Confirmation
                                    <input class="form-control" type="file" name="invoice" />
                                </div>
                                <br />
                                <button class="btn btn-dark" type="submit"><a>Donate now</a></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <header class="header">
                            <img src="<?= base_url(); ?>assets/img/caorusel/Theodore.jpg" class="d-block w-100" />
                        </header>
                    </div>
                </div>
            </div>
        </section>

        <!--  ====================== Akhir About ======================  -->

        <!--  ====================== Donation ======================  -->

        <section class="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-left services-title">
                        <h4 class="text">Overview: Art in Indonesia</h4>
                        <p>
                            The art and culture of Indonesia have been shaped by
                            interactions between original indigenous customs and multiple
                            foreign influences. Indonesia is centrally located along ancient
                            trading routes between the Far East, South Asia, and the Middle
                            East, resulting in art and paintings that are strongly
                            influenced by a multitude of religions, including Hinduism,
                            Buddhism, Confucianism , Islam, and Christianity.
                        </p>
                    </div>
                    <div class="col-lg-12 text-left services-title">
                        <h4 class="text">Indonesian Painting Before the 19th Century</h4>
                        <p>
                            Indonesian painting before the 19th century was mostly
                            restricted to the decorative arts, considered to be a religious
                            and spiritual activity. Artists’ names were often anonymous, as
                            the individual human creator was seen as far less important than
                            his creation to honor the deities or spirits. Notable artwork
                            includes the mural paintings on the long houses of the Kenyah
                            people of Borneo, which are based on endemic natural motifs such
                            as ferns and hornbills. Other traditional art includes the
                            geometric wood carvings of the Toraja people of South Sulawesi.
                            There is a tradition of Balinese painting that uses narrative
                            imagery to depict scenes from Balinese legends and religious
                            scripts. These classical paintings can usually be found in
                            Indonesian lontar or palm-leaf manuscripts and on the ceilings
                            of Balinese temples.
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 text-left services-title">
                    <h4 class="text">Indonesian Painting After the 19th Century</h4>
                    <p>
                        Under the influence of the Dutch colonial power, a trend toward
                        Western style painting emerged in the 19th century. In the
                        Netherlands, the term “Indonesian Painting” is often applied to
                        the paintings produced by Dutch or other foreign artists who lived
                        and worked in the former Netherlands-Indies. The most famous
                        indigenous 19th century Indonesian painter is Raden Saleh
                        (1807–1877), who was also the first indigenous artist to study in
                        Europe. His art is heavily influenced by Romanticism.
                    </p>
                </div>
                <div class="col-lg-12 text-center services-title">
                    <img src="<?= base_url(); ?>assets/img/Body/DonationPage/Diponegoro.jpe" class="w-50" />
                    <p class="text-dark justify-content-center">
                        <b><i>The Arrest of Pangeran Diponegoro by Raden Saleh</i></b>
                    </p>
                </div>
                <p>
                    The 1920s to 1940s was a time of growing nationalism in Indonesia.
                    The previous period of romanticism was not seen as a purely
                    Indonesian movement and began to wane, and painters began to turn to
                    the natural world for inspiration. Some examples of Indonesian
                    painters during this period are the Balinese Ida Bagus Made and the
                    realist Basuki Abdullah. The Indonesian Painters Association (or
                    PERSAGI, 1938–1942) was formed during this period and established a
                    contemporary art philosophy that saw art as a reflection of the
                    artist’s individual views, as well as an expression of national
                    cultural thoughts. During the 1960s, new elements were added when
                    abstract expressionism and Islamic art began to be absorbed by the
                    art community. The national identity of Indonesia was stressed by
                    painters through the use of a realistic, documentary style.
                </p>
            </div>
        </section>
        <!--  ====================== Akhir Donation =======================  -->
    </main>

    <!-- ====================== Akhir Content ====================== -->

    <!-- Footer -->
    <footer>
        <div class="container-fluid" style="background-color: whitesmoke">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col text-center">
                        <div class="mb-3 mt-5">
                            <img src="img/logo.png" width="150" alt="" />
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