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
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- Added CSS -->
    <link href="css/index.css" rel="stylesheet">
    <link href="css/slides.css" rel="stylesheet">
    <link href="css/request.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Added Scripts -->
    <script src="js/slides.js"></script>

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
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <!-- About Header Button -->
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <!-- Volunteer Header Button -->
                        <li>
                            <a class="page-scroll" href="#volunteer">Volunteer</a>
                        </li>
                        <!-- Impact Header Button -->
                        <li>
                            <a class="page-scroll" href="#impact">Impact</a>
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

        <!-- Model Request -->
        <section id="model-request" class="container content-section text-center reset-top-padding">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- Model Request Text -->
                    <h2 class="transform-reset">Request a Model Today</h2>
                    <h4 class="transform-reset">Click <a href="#">here</a> for instructions and information on requesting a model.</h4>

                    <form id="requestForm" action="submit.php" method="post">
                        <!-- Order Name Field -->
                        <div class="form-group">
                            <label for="usr">
                                <h5 style="margin: 0">Name</h5></label>
                            <input type="text" class="form-control" placeholder="John Doe" id="usr" name="usr" maxlength="100">
                        </div>
                        <!-- Order E-Mail Field -->
                        <div class="form-group">
                            <label for="email">
                                <h5 style="margin: 0">E-Mail</h5></label>
                            <input type="email" class="form-control" placeholder="user@example.com" id="email" name="email" maxlength="64">
                        </div>
                        <!-- Order Address Field -->
                        <div class="form-group">
                            <label for="address">
                                <h5 style="margin: 0">Address</h5></label>

                            <!-- Address Line 1 Field -->
                            <div class="line-box">
                                <a class="address-label">Address Line 1</a>
                                <input type="text" class="form-control line-change" placeholder="Address Line 1" id="address1" name="address1" maxlength="25">
                            </div>

                            <!-- Address Line 2 Field -->
                            <div class="line-box" style="margin-top: 10px;">
                                <a class="address-label">Address Line 2</a>
                                <input type="text" class="form-control line-change" placeholder="Address Line 2" id="address2" name="address2" maxlength="25">
                            </div>

                            <!-- City Field -->
                            <div class="line-box" style="margin-top: 10px;">
                                <a class="address-label">City</a>
                                <input type="text" class="form-control line-change" placeholder="City" id="city" name="city" maxlength="25">
                            </div>

                            <!-- State Field -->
                            <div class="line-box" style="margin-top: 10px;">
                                <a class="address-label">State</a>
                                <input type="text" class="form-control line-change" placeholder="State" id="state" name="state" maxlength="15">
                            </div>

                            <!-- Zip Code Field -->
                            <div class="line-box" style="margin-top: 10px;">
                                <a class="address-label">Zip Code</a>
                                <input type="text" class="form-control line-change" placeholder="Zip Code" id="zipcode" name="zipcode" maxlength=10>
                            </div>

                            <!-- Braille Address Label -->
                            <div class="line-box" style="margin-top: 10px;">
                                <a class="address-label">Braille Address Label</a>
                                <input type="checkbox" class="form-control checkbox-change" id="checkbox" name="checkbox">
                            </div>
                        </div>

                        <!-- STL File Field -->
                        <div class="form-group">
                            <label for="stlUpload">
                                <h5 style="margin: 0;">Stl File (optional)</h5></label>
                            <input type="text" class="form-control" id="stlUpload" name="stlUpload" maxlength="100">
                        </div>

                        <!-- Model Size Field -->
                        <div class="form-group">
                            <label for="modelSize">
                                <h5 style="margin: 0;">Desired Model Size (in.)</h5></label>
                            <input type="text" class="form-control" placeholder="3 - 7" id="modelSize" name="modelSize" maxlength=5></input>
                        </div>

                        <!-- Considerations Field -->
                        <div class="form-group">
                            <label for="considerations">
                                <h5 style="margin: 0;">Do you need any special considerations?</h5></label>
                            <input type="text" class="form-control" placeholder="Details..." id="considerations" name="considerations" maxlength="250"></input>
                        </div>

                        <!-- Understand Field -->
                        <div class="form-group">
                            <label for="understand">
                                <h5 style="margin: 0;">What part of this object are you trying to better understand?</h5></label>
                            <input type="text" class="form-control" placeholder="Details..." id="understand" name="understand" maxlength="250"></input>
                        </div>

                        <!-- Publicity Field -->
                        <div class="form-group">
                            <label for="publicity">
                                <h5 style="margin: 0;">How did you hear about See3D?</h5></label>
                            <input type="text" class="form-control" placeholder="Details..." id="publicity" name="publicity" maxlength="250"></input>
                        </div>

                        <!-- Submit Button -->
                        <div class="button-box">
                            <a class="btn btn-default btn-lg" href="javascript:submit()">Submit</a>
                            <input style="display:none;" id="submit" type="submit" href="#" class="btn btn-default btn-lg" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>

        </footer>

        <!-- Form Validation -->
        <script>
            // Called when submit button is pressed
            function submit() {
              // Gather form variables
              var name = document.getElementById('usr');
              var email = document.getElementById('email');
              var address1 = document.getElementById('address1');
              var city = document.getElementById('city');
              var state = document.getElementById('state');
              var zipcode = document.getElementById('zipcode');
              var understand = document.getElementById('understand');
              var publicity = document.getElementById('publicity');

              if (name.value.equals("")){
                name.style.borderColor = "red";
              }
            }
        </script>

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
