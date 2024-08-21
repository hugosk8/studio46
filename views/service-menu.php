<?php
$prestations = [
    'soins-du-visage' => 'Soins du visage',
    'soins-du-corps' => 'Soins du corps',
    'soins-des-mains-et-des-pieds' => 'Soins des mains et des pieds',
    'amincissement' => 'amincissement',
    'maquillage' => 'Maquillage',
    'beaute-du-regard' => 'Beauté du regard',
    'bronzage' => 'Bronzage',
    'aquabike' => 'Aquabike',
    'epilations' => 'Epilations'
]
?>

<ul class="services-details-two__category-list list-unstyled">
    <?php foreach ($prestations as $prestation => $k) {  ?>
        <?php //var_dump($prestation) ?>

        <li class="<?= ($prestation === $_GET['p'] ? 'active' : '') ?>">
            <a href="<?= URL . $prestation ?>"><?= $k ?><i class="fa fa-angle-right"></i></a>
        </li>
    <?php } ?>
</ul>

