<?php
$this->extend('../Layout/TwitterBootstrap/signin');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Card'), ['action' => 'edit', $card->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Card'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cards'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Card'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Card'), ['action' => 'edit', $card->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Card'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id)]) ?> </li>
<li><?= $this->Html->link(__('List Cards'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Card'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($card->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($card->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Description') ?></td>
            <td><?= h($card->description) ?></td>
        </tr>
        <tr>
            <td><?= __('Url Image') ?></td>
            <td><?= h($card->url_image) ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $card->has('user') ? $this->Html->link($card->user->id, ['controller' => 'Users', 'action' => 'view', $card->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($card->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($card->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($card->modified) ?></td>
        </tr>
    </table>
</div>

