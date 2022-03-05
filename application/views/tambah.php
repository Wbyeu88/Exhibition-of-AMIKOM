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
    <style type="text/css">
    .pertama {
        width: 500px;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
        background-color: whitesmoke;
    }
    </style>
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
                        <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>tambah">Add</a>
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


    <center>
        <h1 class="mt-5 pt-5">~ Add Collection ~</h1>
    </center>
    <form method="POST" action="<?php base_url(); ?>tambah/tambah" enctype="multipart/form-data">
        <section class="pertama mt-5">
            Artist
            <input class="form-control" type="text" name="artis" />
            Title
            <input class="form-control" type="text" name="judul" placeholder="Input max 10 characters" maxlength="10" />
            Description
            <textarea rows="3" class="form-control" name="deskripsi" placeholder="Input max 250 characters"
                maxlength="250"></textarea>
            Image
            <input class="form-control" type="file" name="gambar" />

            <!-- <div>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <select name="email">
                            <option>--pilih--</option>
                            
                        </select>
                    </td>
                </tr>
            </div> -->
            <br />
            <div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </section>
    </form>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>