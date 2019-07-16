<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/signin');
$this->assign('title','Crear Usuario');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Listar Cartas'), ['controller' => 'Cards', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Nueva Carta'), ['controller' => 'Cards', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active"><?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class'=>'nav-link']) ?></li>
    <li class="nav-item"><?= $this->Html->link(__('List Cards'), ['controller' => 'Cards', 'action' => 'index'], ['class'=>'nav-link']) ?> </li>
    <li class="nav-item"><?= $this->Html->link(__('New Card'), ['controller' => 'Cards', 'action' => 'add'], ['class'=>'nav-link']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($user); ?>
<fieldset>
    <legend><?= __('Agregar {0}', ['Usuario']) ?></legend>
    <?php
    echo $this->Form->control('first_name', array('label' => 'Nombre'));
    echo $this->Form->control('last_name', array('label' => 'Apellido'));
    echo $this->Form->control('username', array('label' => 'Nombre de Usuario'));
    echo $this->Form->control('email', array('label' => 'Correo-e'));
    echo $this->Form->control('password', array('label' => 'Contraseña'));
    echo $this->Form->control('role', array('label' => 'Rol'));
    echo $this->Form->control('active', array('label' => '¿activo?'));
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
