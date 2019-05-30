<?php

	include "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel='icon' href='images/favi1.png' type='image/x-icon' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="css/responsive/responsive.css" rel="stylesheet">
    <title>Portfolio</title>

</head>

<body>
    <!-- lang -->
    <?php
$flag = "https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png"; 
$name = "English";
if (isset($_GET['lang'])){
  if($_GET['lang'] == 'fr'){
    $flag = "https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_France.png";
    $name  = "Français";
  }	
  
}
?>
    <div class="switch-lang">
        <li class="current-lang"><img class="lang-flag" src="<?= $flag?>" />
            <a class="lang-text" href="index.php?lang=en"><?=$name?></a>
        </li>
        <div class="lang-dropdown">
            <li class="selecting-lang"><img class="lang-flag"
                    src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_France.png" />
                <a class="lang-text" href="index.php?lang=fr">Français</a>
            </li>
            <li class="current-lang"><img class="lang-flag"
                    src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png" />
                <a class="lang-text" href="index.php?lang=en">English</a>
            </li>
        </div>
    </div>


    <!-- end lang -->


    <header>
        <div class="open">
            <span class="cls"></span>
            <span>
                <ul class="sub-menu ">
                    <li> <a href="#Home"><?php echo $lang['1'] ?></a></li>
                    <li> <a href="#About"><?php echo $lang['2'] ?></a> </li>
                    <li> <a href="#Skills"><?php echo $lang['3'] ?></a> </li>
                    <li> <a href="#Skills"><?php echo $lang['0'] ?></a> </li>
                    <li> <a href="#Projects"><?php echo $lang['4'] ?></a> </li>

                </ul>
            </span>
            <span class="cls"></span>
        </div>
        <img id="Home" class="mx-5 my-5 pt-5" style="width: 18%;" src="images/logo.png" alt="logo">
        <div class="row text">

            <div class="col text-left mt-5 ml-5" id="typed-strings">
                <h4 class="text-dark text io"><span class="textp display-3"></span></h4>

            </div>
            <span id="typed"></span>
        </div>

    </header>
    <!-- ****** About Us Area Start ****** -->
    <section class="fplus-about-us-area bg-gray section-padding-120" id="About">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4 class="my-5"><?php echo $lang['6'] ?>
                            <hr style="border: 3px solid #000;width:80px;">
                        </h4>

                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="about-us-content wow fadeInLeftBig" data-wow-delay="0.5">
                <div
                    class="d-flex flex-column flex-sm-column flex-md-column flex-lg-row flex-xl-row no-gutters align-items-center">

                    <div class="">
                        <div class="about-us-thumb wow fadeIn" data-wow-delay="1s">
                            <img src="images/adil 2.jpg" class="img-fluid w-75 ml-5" alt="adil">
                        </div>
                    </div>

                    <div class="">
                        <div class="about-us-text wow fadeIn px-3" data-wow-delay="1.5s">
                            <h4 class="text-center"><?php echo $lang['7'] ?></h4>
                            <p class="ml-5">
                                <?php echo $lang['8'] ?>
                            </p>
                            <div class="icons ml-5">
                                <a href="https://www.facebook.com/adil.elatmani" target="_blank"><i
                                        class="fab fa-facebook-square fa-2x"></i></a>
                                <a href="https://github.com/elatmanii" target="_blank"><i
                                        class="fab fa-github fa-2x"></i></a>
                                <a href="https://www.linkedin.com/in/adil-elatmani/" target="_blank"><i
                                        class="fab fa-linkedin fa-2x"></i></a>
                                <a href="https://gitlab.com/adilooock?nav_source=navbar" target="_blank"><i
                                        class="fab fa-gitlab fa-2x"></i></a>
                                <a href="https://twitter.com/elatmani_adil" target="_blank"><i
                                        class="fab fa-twitter fa-2x"></i></a>
                                <a href="https://drive.google.com/open?id=1bkngGhthVmXx43Jhv37vX8ITmfG9C_9T"
                                    target="_blank"><i class="fas fa-file-download fa-2x"></i></a>
                            </div>
                            <img src="images/adil.png" alt="" class="img-fluid sign" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Skills Head -->
    <div id='Skills' class="container">
        <div class="row">
            <div class="col">
                <h4 class="my-5 text-center"><?php echo $lang['9'] ?>
                    <hr style="border: 3px solid #000;width:80px;">
                </h4>
            </div>
        </div>
    </div>
    <!-- Section Skills start -->
    <section class="mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col d-flex justify-content-center justify-content-around">
                    <i class="fab fa-html5 fa-10x"></i>
                    <i class="fab fa-css3-alt fa-10x"></i>
                    <i class="fab fa-js fa-10x"></i>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center justify-content-around">
                    <i class="fab fa-php fa-10x"></i>
                    <i class="fas fa-database fa-10x pr-4"></i>
                    <i class="fab fa-adobe fa-10x mr-3"></i>
                </div>
            </div>
        </div>
        <!-- <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-center justify-content-between">
          <i class="fab fa-php fa-10x"></i>
          <i class="fas fa-server fa-10x"></i>
          <i class="fab fa-adobe fa-10x"></i>
        </div>
      </div>
    </div> -->
        </div>


    </section>
    <!-- Section Skills end -->

    <!-- services-->
    <section class="services pt-5" id="services">
        <div class="services-section">
            <div class="inner-width">
                <h1 class="section-title"><?php echo $lang['ms'] ?></h1>
                <div class="border"></div>
                <div class="services-container">

                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <div class="service-title"><?php echo $lang['pd'] ?></div>
                        <div class="service-desc">
                            <?php echo $lang['gc'] ?>
                        </div>
                    </div>

                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="service-title"><?php echo $lang['wed'] ?></div>
                        <div class="service-desc">
                            <?php echo $lang['prov'] ?>
                        </div>
                    </div>

                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="service-title"><?php echo $lang['mbdev'] ?></div>
                        <div class="service-desc">
                            <?php echo $lang['smart'] ?>
                        </div>
                    </div>

                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="service-title"><?php echo $lang['machine'] ?></div>
                        <div class="service-desc">
                            <?php echo $lang['dont'] ?>
                        </div>
                    </div>

                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <div class="service-title"><?php echo $lang['data'] ?></div>
                        <div class="service-desc">
                            <?php echo $lang['like'] ?>
                        </div>
                    </div>

                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fas fa-undo-alt"></i>
                        </div>
                        <div class="service-title"><?php echo $lang['webrest'] ?></div>
                        <div class="service-desc">
                            <?php echo $lang['is'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->



    <!-- portfolio -->
    <section class="portfolio py-5" id="Projects">
        <div class="container py-lg-5">
            <p class="paragraph"><?php echo $lang['10'] ?></p>
            <h3 class="heading mb-sm-5 mb-4">Portfolio</h3>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="box9">
                        <img src="images/Count.PNG" alt="portfolio" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title">portfolio</h3>
                            <ul class="icon">

                                <li><a href="https://github.com/elatmanii/Count" target="_blank"><i
                                            class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="box9">
                        <img src="images/vegan.png" alt="portfolio" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title">Vegan Donut</h3>
                            <ul class="icon">

                                <li><a href="https://github.com/elatmanii/Vegan-Donut-shop" target="_blank"><i
                                            class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="box9">
                        <img src="images/calcul.png" alt="portfolio" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title"><?php echo $lang['12'] ?></h3>
                            <ul class="icon">

                                <li><a href="https://github.com/elatmanii/calcule" target="_blank"><i
                                            class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="box9">
                        <img src="images/Crepe.PNG" alt="portfolio" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title"><?php echo $lang['13'] ?></h3>
                            <ul class="icon">

                                <li><a href="https://github.com/elatmanii/crepe-" target="_blank"><i
                                            class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="box9">
                        <img src="images/slack.png" alt="portfolio" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title">Slack</h3>
                            <ul class="icon">

                                <li><a href="https://github.com/elatmanii/slack" target="_blank"><i
                                            class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="box9">
                        <img src="images/piano.PNG" alt="portfolio" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title">Piano-js</h3>
                            <ul class="icon">

                                <li><a href="https://github.com/elatmanii/piano" target="_blank"><i
                                            class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="box9">
                        <img src="images/randonnee.PNG" alt="portfolio" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title"><?php echo $lang['14'] ?></h3>
                            <ul class="icon">

                                <li><a href="https://github.com/elatmanii/randonnee" target="_blank"><i
                                            class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="box9">
                        <img src="images/master-grid.PNG" alt="portfolio" class="img-fluid" />
                        <div class="box-content">
                            <h3 class="title">Master grid</h3>
                            <ul class="icon">

                                <li><a href="https://github.com/elatmanii/grid-css-master" target="_blank"><i
                                            class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <section class="contact py-5" id="Contact">
                    <div class="container py-lg-5">
                        <p class="paragraph"><?php echo $lang['15'] ?></p>
                        <h3 class="heading mb-sm-5 mb-4">Contact</h3>
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form name="contactform" id="contactform" method="post" action="mail.php"
                                        onsubmit="return(validate());" novalidate="novalidate">
                                        <div class="row">
                                            <div class="form-group col-md-6 ">
                                                <label><?php echo $lang['17'] ?></label>
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Enter Name" name="name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Enter Email" name="email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label><?php echo $lang['18'] ?></label>
                                                <input type="text" class="form-control" id="phone"
                                                    placeholder="Enter Phone no." name="phone">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label><?php echo $lang['19'] ?></label>
                                                <input type="text" class="form-control" id="subject"
                                                    placeholder="Enter Subject" name="subject">
                                            </div>
                                            <div class="form-group col-12">
                                                <label>Message</label>
                                                <textarea name="message" class="form-control" id="iq"
                                                    placeholder="Enter Your Message Here"></textarea>
                                            </div>
                                            <button name="submit" type="submit"
                                                class="btn btn-default"><?php echo $lang['20'] ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- //Contact -->


                <!-- copyright -->

                <!-- move top -->
                <div id="Home" class="move-top text-right">
                    <a href="#Home" class="move-top">
                        <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- move top -->



                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
                <script src="script.js"></script>



</body>

</html>
<!-- https://github.com/elatmanii/Vegan-Donut-shop -->
<!-- https://github.com/elatmanii/blure -->
<!-- https://github.com/elatmanii/crepe- -->
<!-- https://github.com/elatmanii/slack -->
<!-- https://github.com/elatmanii/randonnee -->
<!-- https://github.com/elatmanii/piano -->