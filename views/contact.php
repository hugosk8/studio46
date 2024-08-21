<?php ob_start() ?>
<?php $metaDescription = "Pour des renseignements ou réservations, contactez-nous au 03.21.23.40.30. Réponse rapide assurée !"?>
<?php $title = "Studio 46 | Nous contacter" ?>
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/studio46/image-index.webp);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?= URL ?>?p=accueil">Accueil</a></li>
                <li><span>/</span></li>
                <li>Contact</li>
            </ul>
            <h2>Contact</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Spa Center Three Start-->
<section class="spa-center-three">

</section>
<!--Spa Center Three End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="contact-page__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Contactez-nous</span>
                        <h2 class="section-title__title">Envoyez un Message</h2>
                    </div>
                    <p class="contact-page__text">Vous avez des questions, des commentaires ou des demandes spéciales ? Laissez-nous un avis ou faites-nous part de vos besoins en utilisant le formulaire ci-dessous </p>
                    <div class="contact-page__social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="contact-page__right">
                    <div class="contact-page__content">
                        <form action="assets/inc/sendemail.php" class="contact-page__form contact-form-validated" novalidate="novalidate" method="POST">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="contact-page__form-input-box">
                                        <input type="text" placeholder="Nom" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__form-input-box">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__form-input-box">
                                        <input type="text" placeholder="Téléphone" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-page__form-input-box">
                                        <input type="text" placeholder="sujet" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-page__form-input-box text-message-box">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="contact-page__btn-box">
                                    <button type="submit" class="thm-btn contact-page__btn">Envoyer message</button>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->
<!--Google Map Start-->
<section class="contact-page__google-map">
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.0425941493563!2d2.7734595767344303!3d50.29113277156223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd487590c1291d%3A0x12246ee9e9c0e1f5!2sStudio%2046!5e0!3m2!1sfr!2sfr!4v1690315895745!5m2!1sfr!2sfr" 
                width="100%" height="450" style="border:0; margin-bottom:50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!--Google Map End-->

<?php $content = ob_get_clean() ?>
<?php require_once 'template.php' ?>