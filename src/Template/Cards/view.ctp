<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card $card
 */
 $this->layout = "compras";
 ?>

<div class="container bg-primary">
        <div class="card">
            <div class="card-header bg-secondary">
                <h1 style="font-size: 31px;"> <?= $card->name?> </h1>
            </div>
            <div class="card-body bg-light">
                <div></div><img width="250px" style="width: 250px;" src="<?= $card->url_image?>">
                <h4 class="text-primary">Descripción</h4><span class="text-primary"><br><?= $card->description?><br></span>
                <a
                    class="btn btn-primary btn-lg text-light bg-primary" role="button" style="font-size: 30px;">Volver</a>
            </div>
        </div>
    </div>