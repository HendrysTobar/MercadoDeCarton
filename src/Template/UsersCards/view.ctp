<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersCard $usersCard
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Card'), ['action' => 'edit', $usersCard->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Card'), ['action' => 'delete', $usersCard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersCard->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Cards'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Card'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersCards view large-9 medium-8 columns content">
    <h3><?= h($usersCard->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $usersCard->has('user') ? $this->Html->link($usersCard->user->id, ['controller' => 'Users', 'action' => 'view', $usersCard->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Card') ?></th>
            <td><?= $usersCard->has('card') ? $this->Html->link($usersCard->card->name, ['controller' => 'Cards', 'action' => 'view', $usersCard->card->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersCard->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($usersCard->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price In Dolar') ?></th>
            <td><?= $this->Number->format($usersCard->price_in_dolar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($usersCard->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($usersCard->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($usersCard->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Cop') ?></th>
            <td><?= $usersCard->is_cop ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Foil') ?></th>
            <td><?= $usersCard->is_foil ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
