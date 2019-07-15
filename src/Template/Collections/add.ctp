<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Collections'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="collections form large-9 medium-8 columns content">
    <?= $this->Form->create($collection) ?>
    <fieldset>
        <legend><?= __('Add Collection') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
        <?php
            echo $this->Form->control('cod',array('type'=>'text'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
