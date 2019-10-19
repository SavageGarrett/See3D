<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';

  sec_session_start();

  if (login_check($mysqli) == true) {
      $logged = 'in';
  } else {
      $logged = 'out';
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- Added CSS -->
    <link href="css/index.css" rel="stylesheet">
    <link href="css/slides.css" rel="stylesheet">

    <!-- Added Scripts -->
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <div id="page-child">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="./index.php">
                        <i class="fa fa-play-circle"></i> <span class="light">See</span>3D
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <?php if (login_check($mysqli) == true) : ?>
                          <li>
                              <a class="page-scroll" href="./includes/logout.php">Logout</a>
                          </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Intro Header -->
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row row-spacing">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading transform-reset">See3D</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Login Form -->
        <section id="model-request" class="container content-section text-center reset-top-padding">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <?php
                    if (isset($_GET['error'])) {
                        echo '<p class="error">Error Logging In!</p>';
                    }
                    ?>
                    <form id="" action="includes/process_login.php" method="post">
                        <!-- E-Mail Field -->
                        <div class="form-group">
                            <label for="email"><h5 style="margin: 0">E-Mail</h5></label>
                            <input type="email" class="form-control" placeholder="Username" id="usr" name="email" maxlength="100">
                        </div>
                        <!-- Password Field -->
                        <div class="form-group">
                            <label for="password"><h5 style="margin: 0">Password</h5></label>
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" maxlength="64">
                        </div>

                        <!-- Submit Button -->
                        <div class="button-box">
                          <input  class="btn btn-default btn-lg"
                                  type="button"
                                  value="Login"
                                  onclick="formhash_login(this.form, this.form.password);" />
                        </div>
                    </form>
                    <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
                    <p>You are currently logged <?php echo $logged ?>.</p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>

        </footer>

        <!-- jQuery -->
        <script src="vendor/jquery/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/grayscale.min.js"></script>

    </div>
</body>

</html>
