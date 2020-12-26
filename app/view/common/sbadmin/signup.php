<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mututama - Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?= BASEURL; ?>/asset2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= BASEURL; ?>/asset2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <a href="<?= BASEURL; ?>/">
                  <h1 class="h4 text-gray-900 mb-4">MutuTama</h1>
                </a>
              </div>
              <!---->
              <div class="p-5">
                <div class="text-center">
                  <h2 class="h6 text-gray-900 mb-4">Buat Akun Sekarang</h2>
                </div>
                <form method="post" action="<?= BASEURL; ?>/Account/createAccount" class="user">
                  <div class="form-group">
                    <?php if (!empty($data['nameError'])) : echo $data['nameError'];
                    endif; ?>
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?php if (!empty($data['name'])) : echo $data['name'];
                                                                                                                                    endif; ?>">
                  </div>
                  <div class="form-group">
                    <?php if (!empty($data['usernameError'])) : echo $data['usernameError'];
                    endif; ?>
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?php if (!empty($data['username'])) : echo $data['username'];
                                                                                                                                          endif; ?>">
                  </div>
                  <div class="form-group">
                    <?php if (!empty($data['telpError'])) : echo $data['telpError'];
                    endif; ?>
                    <input type="text" class="form-control form-control-user" id="telp" name="telp" placeholder="08xxxxxxxxxx" value="<?php if (!empty($data['telp'])) : echo $data['telp'];
                                                                                                                                      endif; ?>">
                  </div>
                  <div class="form-group">
                    <?php if (!empty($data['emailError'])) : echo $data['emailError'];
                    endif; ?>
                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?php if (!empty($data['email'])) : echo $data['email'];
                                                                                                                                          endif; ?>">
                  </div>
                  <div class="form-group">
                    <?php if (!empty($data['passwordError'])) : echo $data['passwordError'];
                    endif; ?>

                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" value="<?php if (!empty($data['password1'])) : echo $data['password1'];
                                                                                                                                              endif; ?>">
                  </div>
                  <div class="custom-control custom-checkbox ">
                    <input type="checkbox" class="custom-control-input" value="2" id="role" name="role" checked disabled>
                    <input type="hidden" id="role" name="role" value="2" />
                    <label class="custom-control-label" for="role">Pelanggan</label>
                  </div>
                  <button type="submit" class="btn btn-info btn-user btn-block">
                    Register Account
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= BASEURL; ?>/Account/forgotpassword">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="<?= BASEURL; ?>/Account/login">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= BASEURL; ?>/asset2/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASEURL; ?>/asset2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASEURL; ?>/asset2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASEURL; ?>/asset2/js/sb-admin-2.min.js"></script>

</body>

</html>