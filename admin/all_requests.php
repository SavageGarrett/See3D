<?php
  include_once '../includes/register.inc.php';
  include_once '../includes/functions.php';

  sec_session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>See3D</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="../css/grayscale.min.css" rel="stylesheet">

    <!-- Added CSS -->
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/slides.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/table.css">

    <!-- Added Scripts -->
    <script type="text/JavaScript" src="../js/sha512.js"></script>
    <script type="text/JavaScript" src="../js/forms.js"></script>
    <script type="text/javascript" src="../js/table.js"></script>

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
                    <a class="navbar-brand page-scroll" href="../index.php">
                        <i class="fa fa-play-circle"></i> <span class="light">See</span>3D
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="page-scroll" href="../includes/logout.php">Logout</a>
                        </li>
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

        <?php
          if (!empty($error_msg)) {
              echo $error_msg;
          }
         ?>
         <?php if (login_check($mysqli) == true) : ?>
          <section id="model-request" class="container content-section text-center reset-top-padding">
            <div class="row">
              <div id="page-top-text" class="col-lg-8 col-lg-offset-2">
                <h1>Form Submits</h1>
                <p><a href="table.php">Current Requests</a></p>
              </div>
            </div>
          </section>

          <section id="table-section" class="container content-section text-center reset-top-padding">
            <div class="row">
              <!-- Table JavaScript -->
              <script type="text/javascript">


                }
              </script>

              <!-- Output Table -->
              <div class="align-table">
                <?php
                  // Get Form Submits from Database
                  include_once '../includes/process_table.php';
                  getRequests($mysqli, "form_submits_permanent", 25);
                ?>
              </div>

              <!-- Back to Previous Table -->
              <a href="./table.php" class="btn btn-default btn-lg" id="back">Back</a>
            </div>
          </section>

         <?php else : ?>
             <p>
                 <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
             </p>
         <?php endif; ?>

        <!-- Footer -->
        <footer>

        </footer>

        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="../js/grayscale.min.js"></script>

    </div>
</body>

</html>
