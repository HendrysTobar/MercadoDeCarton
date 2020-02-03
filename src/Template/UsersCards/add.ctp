<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersCard $usersCard
 */

$this->extend('../Layout/TwitterBootstrap/signin');
$this->assign('title','Ofrecer Carta');
?>


<div class="container" id="frmOfrecer">
    <div class="col-lg-6 col-lg-offset-3 form-group">
        <legend><?= __('Ofrecer Carta') ?></legend>
        <input list="dlCartas" class="form-control form-control-lg" type="text" placeholder="Ofrecer..." id="qCarta">
        <datalist  id="dlCartas">            
        </datalist>
        <!--
            El autocomplete no se ve tan bien
            tal vez podemos provar esto:--https://mdbootstrap.com/docs/jquery/forms/autocomplete/
-->
    </div>
</div>



<div class="usersCards col-lg-offset-3 form large-9 medium-8 columns content">  

    <!--
    <?= $this->Form->create($usersCard) ?>
    -->
    <fieldset>
        

        <!--
        <?php
            echo $this->Form->control('price');
            echo $this->Form->control('price_in_dolar');
            echo $this->Form->control('is_cop');
            echo $this->Form->control('is_foil');
            echo $this->Form->control('amount');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('card_id', ['options' => $cards]);
        ?>
        -->
    </fieldset>




    <?= $this->Form->button(__('Ofrecer')) ?>
    <?= $this->Form->end() ?>    
</div>

<?php $this->append('script',$this->Html->script('mdc/OfrecerCarta'))?>