<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersCard $usersCard
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersCard->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersCard->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users Cards'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersCards form large-9 medium-8 columns content">
    <?= $this->Form->create($usersCard) ?>
    <fieldset>
        <legend><?= __('Edit Users Card') ?></legend>
        <?php
            echo $this->Form->control('price');
            echo $this->Form->control('price_in_dolar');
            echo $this->Form->control('is_cop');
            echo $this->Form->control('is_foil');
            echo $this->Form->control('amount');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('card_id', ['options' => $cards]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
