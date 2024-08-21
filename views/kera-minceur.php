<?php ob_start() ?>
<?php $metaDescription = "Obtenez un teint éclatant toute l'année avec nos services de bronzage de qualité. Rayonnez avec une peau dorée. Réservez votre session dès maintenant : séance UV, douche auto-bronzante.."?>
<?php $title = "Studio 46 | Bronzage" ?>       
<!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/studio46/breadcrumbs/bronzage.webp);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Accueil</a></li>
                        <li><span>/</span></li>
                        <li><a href="services.html">Nos prestations</a></li>
                        <li><span>/</span></li>
                        <li>Bronzage»</li>
                    </ul>
                <h2>Bronzage»</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Services Details Two Start-->
    <section class="services-details-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="services-details-two__left">
                        <div class="services-details-two__category">
                            <ul class="services-details-two__category-list list-unstyled">
                                <li>
                                    <a href="<?= URL ?>?p=soins-du-visage">Soins du visage<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=soins-du-corps">Soins du corps<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=soins-des-mains-et-des-pieds">Soins des mains et des pieds<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=amincissement">Amincissement<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=maquillage">Maquillage<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=beaute-du-regard">Beauté du regards<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li class="active">
                                    <a href="<?= URL ?>?p=bronzage">Bronzage<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=aquabike">Aquabike<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=epilation">Epilation<i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="services-details-two__help-line">
                        <div class="services-details-two__help-line-img">
                            <img src="assets/images/studio46/each-presta/news/UV.jpeg" alt="photo d’une machine de bronzage de studio46">
                        </div>
                        <div class="services-details-two__help-line-content">
                            <div class="services-details-two__help-line-icon">
                                <span class="icon-telephone-call"></span>
                            </div>
                            <p class="services-details-two__help-line-sub-title">Une question ?</p>
                            <h3 class="services-details-two__help-number"><a href="tel:0321234030">03 21 23 40 30</a></h3>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="services-details-two__right">
                        <h3 class="services-details-two__title-1">Bronzage»</h3>
                        <p class="services-details-two__text-1">Nous utilisons des produits de bronzage de haute qualité, sans danger pour votre peau, afin de vous offrir un teint éclatant sans les risques liés à l'exposition au soleil. Notre équipe d'experts veillera à ce que votre bronzage soit uniforme, naturel et sans traces.</p>
                        
                        <div class="inner" style="margin-top: 30px;">
                            <ul class="services-details-two__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Séance UV -> 7€ </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Douche auto bronzante : Corps -> 7€</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Douche auto bronzante : Haut ou bas du corps -> 15€</p>
                                    </div>
                                </li>
                                <div style="margin-top: 30px;" class="spa-special__btn-box">
                                    <a href="https://www.planity.com/studio-46-62000-arras" class="spa-special__btn thm-btn">Je reserve en ligne</a>
                                </div>
                            </ul>
                        </div><!-- /.inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services Details Two End-->
<?php $content = ob_get_clean() ?>
<?php require_once "template.php" ?>