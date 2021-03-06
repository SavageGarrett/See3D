<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

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
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  	<!-- Added CSS -->
    <link href="css/slides.css" rel="stylesheet">
  	<link href="css/index.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153533872-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-153533872-1');
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top">

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
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#volunteer">Volunteer</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#impact">Impact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#donors">Donors</a>
                    </li>
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
                        <p class="intro-text longText">A community-driven effort to bring
                          3D printed models into the hands of the blind and low vision.</p>
                        <p class="intro-text smallText">A community effort to bring 3D models into the hands of the blind.</p>
                    </div>
					<div class="slideshow-container">
						<div class="mySlides">
              <!-- Put image inside a frame -->
              <div class="slide-image-box">
                <img alt="See3D logo" src="img_refactor/See3D_edited.jpg" style="
                display: block;
                margin-left: auto;
                margin-right: auto;
                height: 336px;
                width: 70%;">
              </div>
            </div>

						<div class="mySlides">
              <div class="slide-image-box">
                <img alt="woman holding a 3D model of a castle"
                  src="img_refactor/cassandra_feeling_castle.jpg" style="
    							display: block;
    							margin-left: auto;
    							margin-right: auto;
    							width: 70%;">
              </div>
						</div>

						<div class="mySlides">
              <div class="slide-image-box">
  						  <img alt="3D model of the United States Capitol Building"
                  src="img_refactor/Capitol_Building.jpg" style="
                  display: block;
    							margin-left: auto;
    							margin-right: auto;
    							width: 70%;">
              </div>
						</div>

						<div class="mySlides">
              <div class="slide-image-box">
  						  <img alt="random 3D models see3d has printed"
                  src="img_refactor/See3D_banner.jpg" style="
                  display: block;
    							margin-left: auto;
    							margin-right: auto;
    							width: 70%;">
              </div>
						</div>

						<div class="mySlides">
              <div class="slide-image-box">
  						  <img alt="Image of blind children holding 3D models"
                  src="img_refactor/children_feeling_models2.JPG" style="
                  display: block;
    							margin-left: auto;
    							margin-right: auto;
    							width: 70%;">
              </div>
						</div>

						<div class="mySlides">
              <div class="slide-image-box">
  						  <img alt="Tactile model of an eye"
                  src="img_refactor/Eye_Model.jpg" style="
                  display: block;
    							margin-left: auto;
    							margin-right: auto;
    							width: 70%;">
              </div>
						</div>

						<div class="mySlides">
              <div class="slide-image-box">
                <img alt="precipitation map tactile graphic"
                  src="img_refactor/Precipitation_Map.jpg" style="
                  display: block;
    							margin-left: auto;
    							margin-right: auto;
    							width: 70%;">
              </div>
						</div>

						<a aria-label="previous image" class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a aria-label="next image" class="next" onclick="plusSlides(1)">&#10095;</a>

						<br>
						<br>
						<div style="text-align:center" class="dotContainer">
							<span class="dot" onclick="currentSlide(1)"></span>
							<span class="dot" onclick="currentSlide(2)"></span>
							<span class="dot" onclick="currentSlide(3)"></span>
							<span class="dot" onclick="currentSlide(4)"></span>
							<span class="dot" onclick="currentSlide(5)"></span>
							<span class="dot" onclick="currentSlide(6)"></span>
							<span class="dot" onclick="currentSlide(7)"></span>
						</div>
						<div class="article-padding"></div>
					</div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center section-padding-change">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Our Project</h2>
                <p>
                  See3D organizes the printing and distribution of 3D printed models for people who are blind.
                  Anyone who is blind/has low vision, or is a parent or teacher of someone who is blind, can make a request for a model.
                </p>
                <p>
                  Through touch, people who are blind can have a better understanding of what an object looks like.
                  Common requests are for maps, buildings, snowflakes, molecules, animals and automobiles.
                  3D printing does not just benefit those who are blind, it benefits everyone because handling a tactile model opens opportunities to discover something new things that may not have been as noticeable in a picture, or verbal description.
                </p>
                <p>
                  Our mission is to connect people who are blind and sighted through 3D printing, so all can gain new perspectives.
                  Our programs also include spreading awareness on the importance accessible materials, including braille.
                  Our models frequently include braille labels and descriptions, so people who are blind can explore and understand their model independently.
                </p>
                <p>
                  If you would like to support our mission, you can donate to our GoFundMe
                  <a href="https://www.gofundme.com/see3d"> Here</a>.
                </p>
                <div class="button-box">
                  <a href="https://www.gofundme.com/see3d" class="btn btn-default btn-lg" id="goFundMe" onclick="unFocus('goFundMe')">About</a>
                </div>
				        <div class="article-padding longText"></div>
            </div>
        </div>
    </section>

    <!-- Volunteer Section -->
    <section id="volunteer" class="content-section text-center section-padding-change">
        <!-- <div class="download-section"> -->
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Get Involved!</h2>
          					<p>We can always use help to print requested models.
                      Whether that be printing multiple copies of our most requested models (cells, insects, and buildings), or individual requests.
                      We also are looking for people who know how to design new 3D printed objects, so we can fulfill requests for models that do not currently have STL files available (logos, scans of people, and specific buildings). We also accept any 3D prints that are no longer being used (including previous model requests from See3D). Please email us at
                      <a href="mailto:info@see3d.org">info@see3d.org</a>.
                      if you want to get involved!
                    </p>
          					<div class="article-padding longText"></div>
      				    </div>
            </div>
        <!-- </div> -->
    </section>

    <!-- Model Request -->
    <section id="model-request" class="container content-section text-center section-padding-change">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="article-padding longText"></div>
                <h2>Request a Model Today</h2>
                <p>If you have previously requested a model, we ask that you only request a maximum of one model per week. Model requests that are suspected to be non-legitmate are subject to be cancelled.</p>
                <p class="longText">If you would like to request a model today, follow the link below to start the process of requesting a model.</p>
                <p>Note: See3D is not responsible for any possible injuries from the models, such as choking from broken pieces.
                  We also cannot guarantee the accuracy of the models in their representation of real life objects.
                  Please keep this is mind before placing a request.
                </p>
                <div class="button-box">
        					<a href="https://goo.gl/forms/utZh2VDY9EFYiwu32" class="btn btn-default btn-lg" id="requestButton" onclick="unFocus('requestButton')">Request a Model</a>
        				</div>
  					    <div class="article-padding longText"></div>
            </div>
          </div>
      </section>

      <!-- Sponsor -->
      <section id="donors" class="content-section text-center section-padding-change">
          <!-- <div class="download-section"> -->
              <div class="container">
                  <div class="col-lg-8 col-lg-offset-2">
                      <h2>Donors and Grants</h2>
                      <ul class="donations">
                        <li>
                          <a class="sponsorTitle" href="https://go.osu.edu/innovationstudio">OSU Innovation Studio</a>
                          <div>
                            <p><a href="https://go.osu.edu/innovationstudio">The Innovation Studio</a> has provided us with funding and guidance in expanding our project.</p>
                          </div>
                        </li>
                        <li>
                          <a class="sponsorTitle" href="https://voraventures.com/">Vora Ventures</a>
                          <div>
                          <p>Vora Ventures <a href="https://www.summitcds.org/communications/news/1633287/senior-wins-award-for-best-venture-pitch-at-techolympics">awarded</a>
                             us with a grant for having the best venture pitch, at
                          <a href="https://techolympics.org/">TechOlympics 2018.</a></p>
                          </div>
                        </li>
                        <li>
                          <a class="sponsorTitle" href="https://geaep.polar3d.com">Additive Education Program</a>
                          <div>
                          <p>GE's Additive Education grant was awarded to the <a href="https://www.summitcds.org/communications/news/1171378/summit-juniors-project-earns-ge-grant-for-3d-printers-for-school">The Summit Country Day School</a>, to provide their school with 3D printers.</p>
                          </div>
                        </li>
                        <li>
                          <a class="sponsorTitle" href="https://www.rootsandshoots.org/">Jane Goodall's Roots and Shoots</a>
                          <div>
                          <p>Jane Goodall's Roots and Shoots Foundation provided us
                            with us with a grant towards our project.</p>
                          </div>
                        </li>
                        <li>
                          <a class="sponsorTitle" href="https://www.geckotek.co/">GeckoTek</a>
                          <div>
                          <p>GeckoTek has provided us with their EZ-STIK build surfaces,
                            which have helped us print delicate models, and remove them easily.</p>
                          </div>
                        </li>
                        <li>
                          <a class="sponsorTitle" href="https://ic3dprinters.com/">IC3D</a>
                          <div>
                          <p>IC3D has provided us with a tremendous amount of filament, which we use for our prints.</p>
                          </div>
                        </li>
                      </ul>
                      <style>
                        .sponsorTitle {
                          font-size: 20px;
                          font-weight: normal;
                          font-family: Verdana, sans-serif;
                        }
                        .donations {
                          list-style-type: none;
                        }
                        .donations li p, .donations li a {
                          font-size: 16px;
                        }
                        .donations li div {
                          margin-left: 20px;
                        }
                      </style>
            					<p></p>
            					<div class="article-padding longText"></div>
        				    </div>
              </div>
          <!-- </div> -->
      </section>

    <!-- Testimonial -->
    <section id="testimonials" class="container content-section text-center section-padding-change">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="article-padding longText"></div>
            <h2>Testimonials</h2>
            <div class="testimony">
              <img style="float: left;" src="./img_refactor/snowflake_cropped.jpg" alt="Snowflake 3D Models">
              <h3>Michelle Quinn</h3>
              <p>Teacher of the Visually Impaired (TVI) in Chicago</p>
              <a href="./pages/testimonies/michellequinn.php">Read Testimony...</a>
            </div>

            <div style="clear: left;"></div>

            <div class="testimony">
              <img style="float: left;" src="./img_refactor/klein_bottle2_cropped.jpg" alt="Klein Bottle 3D Model">
              <h3>Winslow Parker</h3>
              <p>Retired Adaptive Computer Trainmer</p>
              <a href="./pages/testimonies/winslowparker.php">Read Testimony...</a>
            </div>

            <div style="clear: left;"></div>

            <div class="testimony">
              <img style="float: left;" src="./img_refactor/karen_cropped.jpg" alt="Karen Arcos">
              <h3>Karen Arcos</h3>
              <p>M.S. Cognitive Neuroscience Ph.D. candidate, University of California Irvine From Los Angeles</p>
              <a href="./pages/testimonies/karenarcos.php">Read Testimony...</a>
            </div>

            <div style="clear: left;"></div>

            <div class="testimony">
              <img style="float: left;" src="./img_refactor/rachel_cropped.jpg" alt="Rachel Hage">
              <h3>Rachel Hage</h3>
              <p>Assistive Technology Instructor, Lighthouse of Broward</p>
              <a href="./pages/testimonies/rachelhage.php">Read Testimony...</a>
            </div>

            <div style="clear: left"></div>

            <style>
              .testimony img {
                width: 200px;
                height: 200px;
                margin-bottom: 50px;
                margin-right: 20px;
              }
              .testimony h3 {
                padding-top: 40px;
              }
              .testimony h3, .testimony p {
                margin-bottom: 10px;
              }
              .testimony a{
                font-size: 20px;
              }
            </style>
          </div>
      </div>
    </section>

    <!-- Impact Section -->
    <section id="impact" class="container content-section text-center section-padding-change">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <h2>Impact and News</h2>
              <p>Check out some articles that spotlight See3D.</p>
              <table class="articleTable">
                <tr>
                  <th><a class="impactLink" href="https://blindabilities.com/?p=2957">Blind Abilities</a></th>
                  <th><a class="impactLink" href="https://m.youtube.com/watch?v=uf_Qw8mcMh0">TEDx Talk</a></th>
                  <th><a class="impactLink" href="https://www.afb.org/aw/18/9/15174">AccessWorld</a></th>
                </tr>
              </table>
      				<div class="article-padding longText"></div>
      				</div>
        </div>
    </section>

    <!-- Footer -->
    <footer>

    </footer>

    <script src="./js/util.js" type="text/javascript"></script>

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
