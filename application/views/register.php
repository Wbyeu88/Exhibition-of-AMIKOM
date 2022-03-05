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
    <!-- mycss -->
    <style>
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
    <title>Register Page</title>
</head>

<body>
    <div class="container-fluid px-5 ">
        <div class="row justify-content-md-center px-5">
            <div class="col-lg-8">
                <div class="card border-0 mt-5 py-2 px-5">
                    <h1>AMIKOM Exhibition</h1>
                    <img src="<?= base_url() ?>assets/image/regist.png" width="800rem" class="img-fluid " alt="...">
                </div>
            </div>
            <div class="col col-md-4" id="regist">
                <div class="card border-0 px-5 py-5">
                    <h3>Sign Up</h3>
                    <form method="POST" action="<?= base_url('register/registration'); ?>">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                value="<?= set_value('username'); ?>">
                            <small class="text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                value="<?= set_value('firstname'); ?>">
                            <small class="text-danger"><?= form_error('firstname'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                value="<?= set_value('lastname'); ?>">
                            <small class="text-danger"><?= form_error('lastname'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label><br>
                            <div class="form-check form-check-inline">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male"
                                        checked>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="Female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="<?= set_value('email'); ?>">
                            <small class="text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password1">
                            <small class="text-danger"><?= form_error('password1'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="password2">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">By signing up, you agree to our Terms ,
                                Data Policy and Cookies Policy.</label>
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                        <!-- <p class="mt-5">Have a Account? <a href="<?= base_url() ?>login">Log In!</a></p> -->
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>