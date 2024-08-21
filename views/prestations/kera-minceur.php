<?php ob_start() ?>
<?php $metaDescription = "Obtenez un teint éclatant toute l'année avec nos services de Kera minceur de qualité. Rayonnez avec une peau dorée. Réservez votre session dès maintenant : séance UV, douche auto-bronzante.."?>
<?php $title = "Studio 46 | Kera minceur" ?>       
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
                        <li>Kera minceur</li>
                    </ul>
                <h2>Kera minceur</h2>
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
                                    <a href="<?= URL ?>?p=kera-visage-sur-mesure">Kera visage sur mesure<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=kera-facialisme">Kera facialisme<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=kera-visage-high-tech">Kera visage high tech<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=beauty-and-go">Beauty and go<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=kera-corps">kera corps<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=kera-experience">Kera experience<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li class="active">
                                    <a href="<?= URL ?>?p=kera-minceur">Kera minceur<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=kera-bronz">Kera bronz'<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=kera-epil">Kera epil'<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=programme-keractive">Le programme Ker'active<i class="fa fa-angle-right"></i></a>
                                </li>
                                <li>
                                    <a href="<?= URL ?>?p=programme-kera-performance">Le programme Kera performance<i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="services-details-two__help-line">
                        <div class="services-details-two__help-line-img">
                            <img src="assets/images/studio46/each-presta/news/UV.jpeg" alt="photo d’une machine de Kera minceur de studio46">
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
                        <h3 class="services-details-two__title-1">Kera minceur</h3>
                        <p class="services-details-two__text-1">Nous utilisons des produits de Kera minceur de haute qualité, sans danger pour votre peau, afin de vous offrir un teint éclatant sans les risques liés à l'exposition au soleil. Notre équipe d'experts veillera à ce que votre Kera minceur soit uniforme, naturel et sans traces.</p>
                        
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
<?php require_once "./views/template.php" ?>