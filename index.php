<?php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

$page = isset($_GET['p']) ? $_GET['p'] : 'accueil';

ob_start();
switch ($page) {
    case null:
        $metaDescription = "Découvrez la maison KERA, où l’approche holistique du bien-être et de la beauté va de pair avec les technologies les plus innovantes.";
        $title = "Institut de beauté et de bien-être holistique à Arras";
        require_once 'views/home.php';
        break;
    case 'accueil':
        $metaDescription = "Découvrez la maison KERA, où l’approche holistique du bien-être et de la beauté va de pair avec les technologies les plus innovantes.";
        $title = "Institut de beauté et de bien-être holistique à Arras";
        require_once 'views/home.php';
        break;
    case 'contact':
        $metaDescription = "Pour des renseignements ou réservations, contactez-nous au 03.21.23.40.30. Réponse rapide assurée !";
        $title = "Maison Kera | Nous contacter";
        require_once 'views/contact.php';
        break;
    case 'nos-soins-du-visage':
        $metaDescription = "Révélez votre éclat avec nos soins du visages personnalisés. Profitez d'une expérience relaxante et revitalisante dès aujourd'hui : soin spiruline, soin de saison..";
        $title = "Maison Kera | Nos soins du visages";
        require_once 'views/prestations/nos-soins-du-visage.php';
        break;
    case 'kera-facialisme':
        $metaDescription = "Offrez à votre corps le bien-être qu'il mérite avec nos soins corporels apaisants. Détente et revitalisation au rendez-vous : soin californien, suédois, lomi lomi..";
        $title = "Maison Kera | Kera facialisme";
        require_once 'views/prestations/kera-facialisme.php';
        break;
    case 'kera-visage-high-tech':
        $metaDescription = "Prenez soin de vos mains et pieds avec nos traitements relaxants. Offrez-leur une touche d'élégance et de douceur. Réservez votre moment de détente : manucure, limage..";
        $title = "Maison Kera | Kera visage high tech";
        require_once 'views/prestations/kera-visage-high-tech.php';
        break;
    case 'beauty-and-go':
        $metaDescription = "Laissez notre expertise en Beauty and go sublimer votre beauté naturelle. Découvrez des looks captivants et réservez votre transformation dès aujourd'hui : Beauty and go de jour, soirée, teintures sourcils ..";
        $title = "Maison Kera | Beauty and go";
        require_once 'views/prestations/beauty-and-go.php';
        break;
    case 'kera-corps':
        $metaDescription = "Laissez notre expertise en Kera corps sublimer votre beauté naturelle. Découvrez des looks captivants et réservez votre transformation dès aujourd'hui : Kera corps de jour, soirée, teintures sourcils ..";
        $title = "Maison Kera | Kera corps";
        require_once 'views/prestations/kera-corps.php';
        break;
    case 'kera-experience':
        $metaDescription = "Obtenez des cils luxuriants et envoûtants avec nos extensions professionnelles. Révélez un regard saisissant. Réservez votre séance dès maintenant : pose complète, remplissage..";
        $title = "Maison Kera | Kera expérience";
        require_once 'views/prestations/kera-experience.php';
        break;
    case 'kera-minceur':
        $metaDescription = "Obtenez un teint éclatant toute l'année avec nos services de Kera minceur de qualité. Rayonnez avec une peau dorée. Réservez votre session dès maintenant : séance UV, douche auto-bronzante..";
        $title = "Maison Kera | Kera minceur";
        require_once 'views/prestations/kera-minceur.php';
        break;
    case 'kera-bronz':
        $metaDescription = "Dites adieu aux poils indésirables avec nos Kera bronz' professionnelles. Une peau lisse et soyeuse vous attend. Réservez votre séance dès maintenant : sourcils, visage, jambes, maillot..";
        $title = "Maison Kera | Kera bronz'";
        require_once 'views/prestations/kera-bronz.php';
        break;
    case 'kera-epil':
        $metaDescription = "Obtenez des cils luxuriants et envoûtants avec nos extensions professionnelles. Révélez un regard saisissant. Réservez votre séance dès maintenant : pose complète, remplissage..";
        $title = "Maison Kera | Kera epil'";
        require_once 'views/prestations/kera-epil.php';
        break;
    case 'kera-mani':
        $metaDescription = "Dites adieu aux poils indésirables avec nos Kera mani professionnelles. Une peau lisse et soyeuse vous attend. Réservez votre séance dès maintenant : sourcils, visage, jambes, maillot..";
        $title = "Maison Kera | Kera mani";
        require_once 'views/prestations/kera-mani.php';
        break;
    case 'kera-pedi':
        $metaDescription = "Dites adieu aux poils indésirables avec nos Kera pedi professionnelles. Une peau lisse et soyeuse vous attend. Réservez votre séance dès maintenant : sourcils, visage, jambes, maillot..";
        $title = "Maison Kera | Kera pedi";
        require_once 'views/prestations/kera-pedi.php';
        break;
    case 'kera-eyes':
        $metaDescription = "Dites adieu aux poils indésirables avec nos Kera'eyes professionnelles. Une peau lisse et soyeuse vous attend. Réservez votre séance dès maintenant : sourcils, visage, jambes, maillot..";
        $title = "Maison Kera | Kera'eyes";
        require_once 'views/prestations/kera-eyes.php';
        break;
    case 'programme-keractive':
        $metaDescription = "Découvrez nos soins amincissants de pointe pour sculpter votre silhouette. Transformez-vous avec des traitements experts. Réservez dès maintenant : séance LPB Alliance";
        $title = "Maison Kera | Programme ker'active";
        require_once 'views/prestations/programme-keractive.php';
        break;
    case 'programme-kera-performance':
        $metaDescription = "Plongez dans la forme avec nos séances d'Programme kera performance rafraîchissantes. Entraînement dynamique et revitalisant. Réservez votre séance aquatique dès aujourd'hui : séance découverte, entretien..";
        $title = "Maison Kera | Programme kera performance";
        require_once 'views/prestations/programme-kera-performance.php';
        break;
    case 'prestations':
        $metaDescription = "Révélez votre éclat avec nos soins du visage personnalisés. Profitez d'une expérience relaxante et revitalisante dès aujourd'hui : soin spiruline, soin de saison..";
        $title = "Maison Kera | Soins du visage";
        require_once 'views/nos_prestations.php';
        break;
    case 'mentions-legales':
        $metaDescription = "Mentions légales";
        $title = "Maison Kera | Mentions légales";
        require_once 'views/mentions-legales.php';
        break;
    case 'qui-sommes-nous':
        $metaDescription = "Pour des renseignements ou réservations, contactez-nous au 03.21.23.40.30. Réponse rapide assurée !";
        $title = "Maison Kera | Qui-sommes-nous?";
        require_once 'views/qui-sommes-nous.php';
        break;
    case 'nos-marques-partenaires':
        $metaDescription = "";
        $title = "";
        require_once 'views/nos-marques-partenaires.php';
        break;
    default:
        require 'views/404.php';
        break;
}
$content = ob_get_clean();
require_once 'views/template.php';