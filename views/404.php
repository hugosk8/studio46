<?php ob_start() ?>
<section>
    <div class="container">
        <div class="row">
            <div class="ptb-100 text-center col-12">
                <h1 class="erreur">ERREUR 404</h1>
            </div>
            <div class="gifText">
                <div class="textErreur">
                    <h2>Oups !</h2>
                    <p>La page que vous recherchez <br>semble introuvable.</p>
                    <span>Retour a la <a href="<?= URL ?>?p=accueil">page d'accueil</a>.</span>
                </div>
                <div class="gif">
                    <img src="assets/images/studio46/404.gif" alt="gif erreur 404">
                </div>
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean() ?>
<?php require_once 'template.php' ?>