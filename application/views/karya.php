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
                <img src="<?= base_url() ?>assets/img/logo.png" width=" 30" height="30">&nbsp;&nbsp;Amikom
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>gallery">Gallery</a>
                    </li>
                    <a class="nav-link active" aria-current="page" href="<?= base_url() ?>karya">Chart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>tambah">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>donate">Donate</a>
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
    <form action="<?= base_url('edit'); ?>" method="POST">
        <div class="container mt-5 pt-5">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr class="bg-secondary text-white">
                            <th scope="col">Id</th>
                            <th scope="col">Artist</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key) : ?>
                        <tr>
                            <td><?php echo $key->id_karya; ?></td>
                            <td><?php echo $key->artis; ?></td>
                            <td><?php echo $key->judul; ?></td>
                            <td><img src="<?php echo base_url('./assets/userfile_karya/' . $key->gambar . ''); ?>"
                                    width="100px"></td>
                            <td><?php echo $key->deskripsi; ?></td>
                            <td class="<?php
                                            if ($key->status == 1) {
                                                echo 'bg-success';
                                            } else {
                                                echo 'bg-warning';
                                            }
                                            ?> text-white" data-toggle="tooltip" data-placement="left"
                                title="Bad weather condition">
                                <?php
                                if ($key->status == 1) {
                                    echo 'Approve';
                                } else {
                                    echo 'Queue';
                                }
                                ?>
                            </td>
                            <td class="text-white" data-toggle="tooltip" data-placement="left"
                                title="Bad weather condition">
                                <!-- <a href="tambah.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a href="hapus.php?_id=<?php echo $data['id']; ?>">Hapus</a> -->
                                <a class="btn btn-success" type="submit" name="edit"
                                    href="<?= site_url('edit/index/' . $key->id_karya) ?>">Edit</a>
                                <br>
                                <br>
                                <a class="btn btn-danger"
                                    onclick="javascript: return confirm('Are you sere for delete?')" type="submit"
                                    name="delete" href="<?= site_url('edit/delete/' . $key->id_karya) ?>">Delete</a>
                                <br>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>