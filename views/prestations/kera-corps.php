<?php ob_start() ?>
<?php $metaDescription = "Laissez notre expertise en Kera corps sublimer votre beauté naturelle. Découvrez des looks captivants et réservez votre transformation dès aujourd'hui : Kera corps de jour, soirée, teintures sourcils .." ?>
<?php $title = "Maison Kera | Kera corps" ?>

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/studio46/breadcrumbs/soins-du-corps.webp);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Accueil</a></li>
                <li><span>/</span></li>
                <li><a href="services.html">Nos prestations</a></li>
                <li><span>/</span></li>
                <li>Kera corps</li>
            </ul>
        <h2>Kera corps</h2>
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
                            <li><a href="<?= URL ?>?p=kera-visage-sur-mesure">Kera visage sur mesure<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="<?= URL ?>?p=kera-facialisme">Kera facialisme<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="<?= URL ?>?p=kera-visage-high-tech">Kera visage high tech<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="<?= URL ?>?p=beauty-and-go">Beauty and go<i class="fa fa-angle-right"></i></a></li>
                            <li class="active"><a href="<?= URL ?>?p=kera-corps">kera corps<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="<?= URL ?>?p=kera-experience">Kera experience<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="<?= URL ?>?p=kera-minceur">Kera minceur<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="<?= URL ?>?p=kera-bronz">Kera bronz'<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="<?= URL ?>?p=kera-epil">Kera epil'<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="<?= URL ?>?p=kera-mani">Kera mani<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="<?= URL ?>?p=kera-pedi">Kera pedi<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="<?= URL ?>?p=kera-eyes">Kera'eyes<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="<?= URL ?>?p=programme-keractive">Le programme Ker'active<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="<?= URL ?>?p=programme-kera-performance">Le programme Kera performance<i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="services-details-two__help-line">
                        <div class="services-details-two__help-line-img">
                            <img src="assets/images/studio46/each-presta/maquillage.webp" alt="photo d’une femme qui se fait maquiller avec un pinceau délicatement les yeux">
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
                    <h3 class="services-details-two__title-1">Kera corps</h3>
                    <p class="services-details-two__text-1">Sublimez votre beauté naturelle avec notre service de Kera corps personnalisé au Maison Kera ! Que ce soit pour une occasion spéciale, un événement important ou simplement pour vous faire plaisir, notre équipe de maquilleurs professionnels est là pour vous offrir un Kera corps impeccable et sur mesure.</p>
                    
                    <div class="inner" style="margin-top: 30px;">
                        <ul class="services-details-two__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        Kera corps jour -> 22€ </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Kera corps soirée -> 27€</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="text">
                                    <p>Kera corps mariée -> 39€ </p>
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
<?php require_once './views/template.php' ?>