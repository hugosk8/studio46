<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6L28H564TX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-6L28H564TX');
    </script>
    <!-- End Google Tag Manager -->

    <!-- META -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= (isset($metaDescription)) ? $metaDescription : 'Découvrez l’élégance et la sérénité à notre institut de beauté. Expérience unique avec des soins de qualité : soins du visage, du corps, maquillage, extension de cils..' ?>" />
    <title>
        <?= (isset($title)) ? $title : 'Maison Kera' ?>
    </title>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/kera/favicon.ico" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/kera/favicon.ico" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/kera/favicon.ico" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <!-- Baskerville -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/mellis-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="assets/vendors/twenty-twenty/twentytwenty.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/mellis.css" />
    <link rel="stylesheet" href="assets/css/mellis-responsive.css" />
    <link rel="stylesheet" type="text/css" href="sweetAlert/sweetalert2.css">
</head>

<body>
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
        <header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="<?= URL ?>?p=accueil"><img src="assets/images/kera/logo_maison_Kera.png" alt="logo studio46" class="header-logo"></a>
                            </div>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li><a href="<?= URL ?>?p=accueil">Accueil</a></li>
                                <li class="dropdown">
                                    <a href="<?= URL ?>?p=prestations">Nos prestations</a>
                                    <ul>
                                        <li><a href="<?= URL ?>?p=nos-soins-du-visage">Nos soins du visages</a></li>
                                        <li><a href="<?= URL ?>?p=kera-facialisme">Kera facialisme</a></li>
                                        <li><a href="<?= URL ?>?p=kera-visage-high-tech">Kera visage high tech</a></li>
                                        <li><a href="<?= URL ?>?p=kera-corps">kera corps</a></li>
                                        <li><a href="<?= URL ?>?p=kera-experience">Kera experience</a></li>
                                        <li><a href="<?= URL ?>?p=kera-minceur">Kera minceur</a></li>
                                        <li><a href="<?= URL ?>?p=kera-bronz">Kera bronz'</a></li>
                                        <li><a href="<?= URL ?>?p=kera-epil">Kera epil'</a></li>
                                        <li><a href="<?= URL ?>?p=kera-mani">Kera mani</a></li>
                                        <li><a href="<?= URL ?>?p=kera-pedi">Kera pedi</a></li>
                                        <li><a href="<?= URL ?>?p=kera-eyes">Kera'eyes</a></li>
                                        <li><a href="<?= URL ?>?p=programme-keractive">Le programme Ker'active</a></li>
                                        <li><a href="<?= URL ?>?p=programme-kera-performance">Le programme Kera performance</a></li>
                                        <li><a href="<?= URL ?>?p=beauty-and-go">Beauty and go</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= URL ?>?p=qui-sommes-nous">Qui sommes nous ?</a></li>
                                <li><a href="<?= URL ?>?p=contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <?= $content ?>
 

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__contact-box">
                                <div class="footer-widget__contact">
                                    <img src="assets/images/kera/logo_maison_Kera.png" alt="flowers">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__timing">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Horaires</h4>
                                </div>
                                <ul class="footer-widget__timing-list list-unstyled">
                                    <li>Lundi de 13h à 19h</li>
                                    <li>Mardi de 9h à 19h</li>
                                    <li>Mercredi de 9h à 19h</li>
                                    <li>Jeudi de 9h à 19h</li>
                                    <li>Vendredi de 9h à 19h</li>
                                    <li>Samedi de 9h à 17h</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__social-box">
                                <p>Prenez rendez-vous au :</p>
                                <a href="tel:0321234030">03.21.23.40.30</a>
                                <div class="site-footer__social">
                                    <a href="https://www.facebook.com/studio46Arras"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/studio46.arras/"><i class="fab fa-instagram"></i></a>
                                </div>
                                <p>9 Place de la Vacquerie <br> 62000, Arras</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">Réalisé par <a href="https://www.0001.fr/" class="_0001">0001-Communication.fr</a></p>
                                <a href="<?= URL ?>?p=mentions-legales">
                                    <p class="mentionBtn">Mentions legales</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->

        <!-- /.page-wrapper -->


        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="<?= URL ?>?p=accueil" aria-label="logo image"><img src="assets/images/kera/logo_maison_Kera.png" width="90" alt="logo Maison Kera" /></a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-phone-alt"></i>
                        <a href="tel:666-888-0000">03.21.23.40.30</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__top">
                    <div class="mobile-nav__social">
                        <a href="https://www.facebook.com/studio46Arras" class="fab fa-facebook-square"></a>
                        <a href="https://www.instagram.com/studio46.arras/" class="fab fa-instagram"></a>
                    </div><!-- /.mobile-nav__social -->
                </div><!-- /.mobile-nav__top -->
            </div>
            <!-- /.mobile-nav__content -->
            <script src="sweetAlert/sweetalert2.min.js"></script>
            <script type="module" src="assets/js/app.js"></script>
            <script src="assets/js/metaDescription.js"></script>
            <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
            <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendors/jarallax/jarallax.min.js"></script>
            <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
            <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
            <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
            <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
            <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
            <script src="assets/vendors/nouislider/nouislider.min.js"></script>
            <script src="assets/vendors/odometer/odometer.min.js"></script>
            <script src="assets/vendors/swiper/swiper.min.js"></script>
            <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
            <script src="assets/vendors/wnumb/wNumb.min.js"></script>
            <script src="assets/vendors/wow/wow.js"></script>
            <script src="assets/vendors/isotope/isotope.js"></script>
            <script src="assets/vendors/countdown/countdown.min.js"></script>
            <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
            <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
            <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
            <script src="assets/vendors/vegas/vegas.min.js"></script>
            <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
            <script src="assets/vendors/timepicker/timePicker.js"></script>
            <script src="assets/vendors/circleType/jquery.circleType.js"></script>
            <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
            <script src="assets/vendors/sidebar-content/jquery-sidebar-content.js"></script>
            <script src="assets/vendors/twenty-twenty/twentytwenty.js"></script>
            <script src="assets/vendors/twenty-twenty/jquery.event.move.js"></script>
            <!-- template js -->
            <script src="assets/js/mellis.js"></script>
</body>
</html>