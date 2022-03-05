<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login Page</title>
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }



    .script {
        color: black;
        font-size: 40px;
        text-transform: uppercase;
        font-family: "Montserrat";

    }

    .row {
        background: white;
        border-radius: 30px;
    }

    .btn {
        border: none;
        outline: none;
        height: 50%;
        width: 100%;
        background-color: grey;
        color: white;
        border-radius: 5px;
        font-weight: bold;
    }

    .btn:hover {
        background: white;
        border: 1px solid;
        color: black;
    }

    a {
        text-decoration: none;
    }
    </style>
</head>

<body>
    <section class="login my-4 mx-5">
        <div class="container-fluid px-7 ">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="<?= base_url() ?>assets/image/1.png" width="800rem" class="img-fluid " alt="">
                </div>

                <div class="col-lg-7 px-5 pt-2">
                    <h1 class="font-weight-bold py-3">AMIKOM Exhibition</h1>
                    <h4>Sign into your account</h4>
                    <form method="POST" action="<?= base_url('login/prosesLogin'); ?>">
                        <?php if ($this->session->flashdata('flash')) : ?>
                        <div class="flash" data-flash="<?= $this->session->flashdata('flash')?>">
                        </div>
                        <?php endif?>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Type your e-mail" class="form-control my-3"
                                    name="email" value="<?= set_value('email'); ?>">
                                <small class="text-danger"><?= form_error('email'); ?></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="******" class="form-control" name="password">
                                <small class="text-danger"><?= form_error('password'); ?></small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn mt-3 mb-5">Login</button>
                            </div>
                            <p>Didn't have account yet? <a href="<?= base_url() ?>register">Create Account Here!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script>
    console.log('tes')
    var flash = $('.flash').data('flash')
    console.log(flash)
    if (flash) {
        Swal.fire({
            title: "Login failed!",
            text: "Wrong Email and password!",
            icon: 'warning'
        })
    }
    </script>


</body>

</html>