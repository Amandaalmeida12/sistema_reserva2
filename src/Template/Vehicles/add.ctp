<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehicle $vehicle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehicles form large-9 medium-8 columns content">
    <?= $this->Form->create($vehicle) ?>
    <fieldset>
        <legend><?= __('Add Vehicle') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('kind');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
