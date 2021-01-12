<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mututama | Engineering Consultant</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="<?= BASEURL; ?>/asset/img/favicon.png" rel="icon">
    <link href="<?= BASEURL; ?>/asset/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="icon" type="image/png" href="<?= BASEURL; ?>/asset3/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/asset3/css/main.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?= BASEURL; ?>/asset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= BASEURL; ?>/asset/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/asset/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/asset/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/asset/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/asset/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= BASEURL; ?>/asset/css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

    <!--==========================
    Top Bar
  ============================-->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="contact-info float-left">
                <i class="fa fa-envelope-o"></i> <a href="mailto:herwinda.ms@gmail.com">herwinda.ms@gmail.com</a>
            </div>
        </div>
    </section>
    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">

        <div class="intro-content">
            <h2>Making <span>your ideas</span><br>happen!</h2>
            <div>
                <a href="#form" class="btn-get-started scrollto">Order Now!</a>
            </div>
        </div>

        <div id="intro-carousel" class="owl-carousel">
            <div class="item" style="background-image: url('/webpro/public/asset/img/intro-carousel/1.jpg');"></div>
            <div class="item" style="background-image: url('/webpro/public/asset/img/intro-carousel/2.jpg');"></div>
            <div class="item" style="background-image: url('/webpro/public/asset/img/intro-carousel/3.jpg');"></div>
            <div class="item" style="background-image: url('/webpro/public/asset/img/intro-carousel/4.jpg');"></div>
            <div class="item" style="background-image: url('/webpro/public/asset/img/intro-carousel/5.jpg');"></div>
        </div>

    </section><!-- #intro -->

    <main id="main">



        <!--==========================
      Form Section
    ============================-->
        <section id="form">
            <div class="container">
                <div class="row">
                    <form method="post" action="<?= BASEURL; ?>/Pelanggan/addOrder" class="contact100-form validate-form">
                        <span class="contact100-form-title">
                            <br>
                            Request Now
                        </span>
                        <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                            <span class="label-input100">FULL NAME *</span>
                            <input class="input100" type="text" id="nama" name="nama" placeholder="Enter Your Name">
                        </div>
                        <div class="wrap-input100 validate-input bg1">
                            <span class="label-input100">Phone (*terdaftar pada Whatsapp)</span>
                            <input class="input100" type="text" id="phone" name="phone" placeholder="Enter Number Phone">
                        </div>

                        <div class="wrap-input100 input100-select bg1">
                            <span class="label-input100">Needed Services *</span>
                            <div>
                                <select class="js-select2" name="services">
                                    <option id="konstruksi" name="services[]" value="1" CHECKED>Konsultasi Kontruksi</option>
                                    <option id="denah" name="services[]" value="2">Konsultasi Denah</option>
                                    <option id="desain" name="services[]" value="3">Konsep Desain</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>

                        <div class="w-full dis-none js-show-service">
                            <div class="wrap-contact100-form-radio">
                                <span class="label-input100">What type of building do you want?</span>

                                <div class="contact100-form-radio m-t-15">
                                    <input class="input-radio100" id="house" type="radio" name="building" value="house">
                                    <label class="label-radio100" for="house">
                                        House
                                    </label>
                                    <input class="input-radio100" id="apartment" type="radio" name="building" value="apartment">
                                    <label class="label-radio100" for="apartment">
                                        Apartment
                                    </label>
                                </div>
                                <!--
                                <div class="wrap-contact100-form-range">
                                    <span class="label-input100">Budget*</span>
                                    <div class="contact100-form-range-value">
                                        $<span id="value-lower">100</span> - $<span id="value-upper">1000</span>
                                        <input type="range" id="budget_min" name="budget_min">
                                        <input type="range" id="budget_max" name="budget_max">
                                    </div>
                                    <div class="contact100-form-range-bar">
                                        <div id="filter-bar"></div>
                                    </div>
                                </div>
                                -->
                                <div class="wrap-contact100-form-range">
                                    <span class="label-input100">Budget *</span>

                                    <div class="contact100-form-range-value">
                                        $<span id="budget_min">50</span> - $<span id="budget_max">100</span>
                                        <input type="range" id="budget_min" name="budget_min">
                                        <input type="range" id="budget_max" name="budget_max">
                                    </div>
                                    <div class="contact100-form-range-bar">
                                        <div id="filter-bar"></div>
                                    </div>
                                </div>

                                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Location">
                                    <span class="label-input100">Location (*city) *</span>
                                    <input class="input100" type="text" name="location" placeholder="Enter Your Location">
                                </div>

                                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Timeline">
                                    <span class="label-input100">Timeline (*months) *</span>
                                    <input class="input100" type="text" name="timeline" placeholder="Enter Your Timeline">
                                </div>

                                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please Type Your Message">
                                    <span class="label-input100">Message</span>
                                    <textarea class="input100" name="message" placeholder="Your message here (Luas tanah, luas bangunan, dll)..."></textarea>
                                </div>

                                <div class="container-contact100-form-btn">
                                    <button type="submit" name="submit" class="contact100-form-btn">
                                        <span>
                                            Submit
                                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                    </form>
                </div>
            </div>

            <!--==========================
      Services Section
    ============================-->
            <section id="services">
                <div class="container">
                    <div class="section-header">
                        <h2>Services</h2>
                        <p>Pada bidang konstruksi, kami memiliki spesialisasi tersendiri dalam <em>services</em> yang kami tawarkan.</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="box wow fadeInLeft">
                                <div class="icon"><i class="fa fa-bar-chart"></i></div>
                                <h4 class="title"><a href="">Konsultasi Kontruksi</a></h4>
                                <p class="description">Dalam membangun rumah tentu saja penting untuk merencanakannya dengan matang.</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="box wow fadeInRight">
                                <div class="icon"><i class="fa fa-picture-o"></i></div>
                                <h4 class="title"><a href="">Konsep Desain</a></h4>
                                <p class="description">Salah satu hal penting sebelum membangun rumah adalah mengonsep desain dari rumah Anda.</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                                <h4 class="title"><a href="">Konsultasi Denah</a></h4>
                                <p class="description">Dalam membangun rumah, denah dari rumah sangatlah penting karena dengan denah yang baik, ruang pada rumah dapat termaksimalkan.</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="box wow fadeInRight" data-wow-delay="0.2s">
                                <div class="icon"><i class="fa fa-map"></i></div>
                                <h4 class="title"><a href="">Pengawasan</a></h4>
                                <p class="description">Dengan adanya pengawasan kami berharap layanan ini dapat membantu anda dalam menjaga ketercapaian yang</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <!-- #services -->
            <!--==========================
      Our Portfolio Section
    ============================-->
            <section id="portfolio" class="wow fadeInUp">
                <div class="container">
                    <div class="section-header">
                        <h2>Our Portfolio</h2>
                        <p>Ini dia beberapa proyek yang telah selesai kami kerjakan bersama-sama dari mulai desain hingga pengwasan sampai selesai</p>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row no-gutters">

                        <div class="col-lg-3 col-md-4">
                            <div class="portfolio-item wow fadeInUp">
                                <a href="https://www.arsicad.id/wp-content/uploads/2017/12/Contoh-Gambar-Teknik.jpg" class="portfolio-popup">
                                    <img src="https://www.arsicad.id/wp-content/uploads/2017/12/Contoh-Gambar-Teknik.jpg" alt="" height="220px">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h2 class="wow fadeInUp">Portfolio Item 1</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="portfolio-item wow fadeInUp">
                                <a href="https://1.bp.blogspot.com/-5Z1ADWEW_sk/Uh1mdhoppTI/AAAAAAAAKkI/NuVX81OXKtE/s1600/tampak%2Brumah.jpg" class="portfolio-popup">
                                    <img src="https://1.bp.blogspot.com/-5Z1ADWEW_sk/Uh1mdhoppTI/AAAAAAAAKkI/NuVX81OXKtE/s1600/tampak%2Brumah.jpg" alt="" height="220px">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h2 class="wow fadeInUp">Portfolio Item 2</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="portfolio-item wow fadeInUp">
                                <a href="https://pastiguna.com/wp-content/uploads/2019/06/teknik-menggambar-prespektif.png" class="portfolio-popup">
                                    <img src="https://pastiguna.com/wp-content/uploads/2019/06/teknik-menggambar-prespektif.png" alt="">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h2 class="wow fadeInUp">Portfolio Item 3</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="portfolio-item wow fadeInUp">
                                <a href="https://image.winudf.com/v2/image1/Y29tLlNrZXRjaG9mSG91c2VBcmNoaXRlY3R1cmUuVWxMaWFwcGtlcmVuX3NjcmVlbl8xXzE1NTYwNzQ0MDlfMDg3/screen-1.jpg?fakeurl=1&type=.jpg" class="portfolio-popup">
                                    <img src="https://image.winudf.com/v2/image1/Y29tLlNrZXRjaG9mSG91c2VBcmNoaXRlY3R1cmUuVWxMaWFwcGtlcmVuX3NjcmVlbl8xXzE1NTYwNzQ0MDlfMDg3/screen-1.jpg?fakeurl=1&type=.jpg" alt="" height="220px">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h2 class="wow fadeInUp">Portfolio Item 4</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="portfolio-item wow fadeInUp">
                                <a href="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80" class="portfolio-popup">
                                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80" alt="" height="220px">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h2 class="wow fadeInUp">Portfolio Item 5</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="portfolio-item wow fadeInUp">
                                <a href="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="portfolio-popup">
                                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" height="220px">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h2 class="wow fadeInUp">Portfolio Item 6</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="portfolio-item wow fadeInUp">
                                <a href="https://images.unsplash.com/photo-1590579491624-f98f36d4c763?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1285&q=80" class="portfolio-popup">
                                    <img src="https://images.unsplash.com/photo-1590579491624-f98f36d4c763?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1285&q=80" alt="" height="220px">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h2 class="wow fadeInUp">Portfolio Item 7</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="portfolio-item wow fadeInUp">
                                <a href="https://cdn.pixabay.com/photo/2019/04/17/14/54/mosque-4134459_1280.jpg" class="portfolio-popup">
                                    <img src="https://cdn.pixabay.com/photo/2019/04/17/14/54/mosque-4134459_1280.jpg" alt="" height="220px">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-info">
                                            <h2 class="wow fadeInUp">Portfolio Item 8</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- #portfolio -->
            <!--===============================================================================================-->
            <script src="<?= BASEURL; ?>/asset3/vendor/jquery/jquery-3.2.1.min.js"></script>
            <!--===============================================================================================-->
            <script src="<?= BASEURL; ?>/asset3/vendor/animsition/js/animsition.min.js"></script>
            <!--===============================================================================================-->
            <script src="<?= BASEURL; ?>/asset3/vendor/bootstrap/js/popper.js"></script>
            <script src="<?= BASEURL; ?>/asset3/vendor/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
            <script src="<?= BASEURL; ?>/asset3/vendor/select2/select2.min.js"></script>
            <script>
                $(".js-select2").each(function() {
                    $(this).select2({
                        minimumResultsForSearch: 20,
                        dropdownParent: $(this).next('.dropDownSelect2')
                    });


                    $(".js-select2").each(function() {
                        $(this).on('select2:close', function(e) {
                            if ($(this).val() == "Please chooses") {
                                $('.js-show-service').slideUp();
                            } else {
                                $('.js-show-service').slideUp();
                                $('.js-show-service').slideDown();
                            }
                        });
                    });
                })
            </script>
            <!--===============================================================================================-->
            <script src="<?= BASEURL; ?>/asset3/vendor/daterangepicker/moment.min.js"></script>
            <script src="<?= BASEURL; ?>/asset3/vendor/daterangepicker/daterangepicker.js"></script>
            <!--===============================================================================================-->
            <script src="<?= BASEURL; ?>/asset3/vendor/countdowntime/countdowntime.js"></script>
            <!--===============================================================================================-->
            <script src="<?= BASEURL; ?>/asset3/vendor/noui/nouislider.min.js"></script>
            <script>
                var filterBar = document.getElementById('filter-bar');

                noUiSlider.create(filterBar, {
                    start: [50, 100],
                    connect: true,
                    range: {
                        'min': 50,
                        'max': 100
                    }
                });

                var skipValues = [
                    document.getElementById('budget_min'),
                    document.getElementById('budget_max')
                ];

                filterBar.noUiSlider.on('update', function(values, handle) {
                    skipValues[handle].innerHTML = Math.round(values[handle]);
                    $('.contact100-form-range-value input[name="budget_min"]').val($('#budget_min').html());
                    $('.contact100-form-range-value input[name="budget_max"]').val($('#budget_max').html());
                });
            </script>
            <!--===============================================================================================-->
            <script src="js/main.js"></script>

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-23581568-13');
            </script>
    </main>