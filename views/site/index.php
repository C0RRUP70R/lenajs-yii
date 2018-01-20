<?php

/* @var $this yii\web\View */

use yii\bootstrap\Carousel;
use yii\helpers\Html;

$this->title = 'Lenka Kalivodová';
?>
<div class="site-index">

    <div class="row">
        <?php
        echo Carousel::widget([
            'items' => $jumbo
        ]); ?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">
                <h2>O mně</h2>
                <p> Kresbě i malbě se věnuji již od dětství. V posledních letech se věnuji převážně realistické kresbě,
                    konkrétně portrétům. Poté co jsem viděla některé umělce ve světe kreslit neuvěřitelné
                    fotorealistické portréty, jsem se rozhodla naučit se to také.</p>

                <p>Portréty kreslím tužkou nebo pastelkami a snažím se o co nejvěrnější zachycení reality, ke kterému
                    je zapotřebí pečlivá pozornost ke každému detailu
                </p>
            </div>
            <div class="col-lg-12">
                <h2>Informace k objednávkám</h2>
                <h3>Jak probíhá objednání kresby?</h3>
                <p> Nejprve je třeba vybrat předlohu. Doporučuji vybírat kvalitní fotografie, ideálně od profesionálního
                    fotografa. Fotografii mi zašlete pomocí kontaktního formuláře, ve kterém blíže specifikujete Vaši
                    objednávku. Pokud si s výběrem fotky nevíte rady, neváhejte mě i tak kontaktovat a já se Vám ráda
                    poradím.</p>

                <p>Součástí formuláře je také vyplnění očekávaného termínu zhotovení portrétu, při čemž standardní doba
                    kresby činí 2 týdny. Celková doba tvorby se odvíjí od zvolené technologie a formátu, proto
                    doporučuji
                    objednávat alespoň 1 měsíc před datem Vámi očekávaného doručení portrétu.</p>

                <p>Po odeslání vyplněného formuláře vás budu do dvou pracovních dní kontaktovat a domluvíme se na
                    podrobnostech kresby včetně konkrétní ceny portrétu. V případě že bude Váš zájem o kresbu trvat Vás
                    požádám o zaplacení zálohy, která činí 50% z výsledné ceny. Pro zájemce jsou v ceně zahrnuté i fotky
                    pořizované v průběhu kresby.</p>

                <p>Po připsání zálohy na účet se ihned pouštím do kreslení. Po dokončení kresby Vám elektronicky zašlu
                    naskenovanou kresbu. V případě, že budete spokojeni zaplatíte zbylých 50% z ceny a já Vám do dvou
                    pracovních dní odešlu na Vaši adresu originál kresby.</p>
            </div>
            <div class="col-lg-12">
                <h2>Jaká je cena?</h2>
                <p>Konečná cena portrétu se odvíjí od několika základních faktorů jako je zvolený materiál (tužka,
                    pastelky), formát (A4, A3, ...) a také celková náročnost kresby (množství detailů). Informace o
                    cenách
                    můžete zjistit v Ceníku.</p>
            </div>
        </div>

    </div>
</div>
