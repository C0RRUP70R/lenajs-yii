<?php

/* @var $this yii\web\View */

$this->title = 'Galerie - Lenka Kalivodová';

?>

<div class="row">

    <?php
    foreach ($images as $item) {
        echo '<div class="col-lg-4 gallery-img-wrapper" style="overflow: hidden; float: left">
    <a href="index.php?r=gallery%2Fdetail&pk='.$item['detail_pk'].'"><img src="img/small/' . $item['img'] . '" class="img-rounded img-responsive gallery-img"> </a>
</div>';
    }
    ?>
</div>




