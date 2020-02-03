<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersCard[]|\Cake\Collection\CollectionInterface $usersCards
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Card'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersCards index large-9 medium-8 columns content">
    <h3><?= __('Users Cards') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price_in_dolar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_cop') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_foil') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('card_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersCards as $usersCard): ?>
            <tr>
                <td><?= $this->Number->format($usersCard->id) ?></td>
                <td><?= $this->Number->format($usersCard->price) ?></td>
                <td><?= $this->Number->format($usersCard->price_in_dolar) ?></td>
                <td><?= h($usersCard->created) ?></td>
                <td><?= h($usersCard->modified) ?></td>
                <td><?= h($usersCard->is_cop) ?></td>
                <td><?= h($usersCard->is_foil) ?></td>
                <td><?= $this->Number->format($usersCard->amount) ?></td>
                <td><?= $usersCard->has('user') ? $this->Html->link($usersCard->user->id, ['controller' => 'Users', 'action' => 'view', $usersCard->user->id]) : '' ?></td>
                <td><?= $usersCard->has('card') ? $this->Html->link($usersCard->card->name, ['controller' => 'Cards', 'action' => 'view', $usersCard->card->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersCard->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersCard->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersCard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersCard->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
