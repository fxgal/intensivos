<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Oferta $oferta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ofertas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodos'), ['controller' => 'Periodos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ofertas form large-9 medium-8 columns content">
    <?= $this->Form->create($oferta) ?>
    <fieldset>
        <legend><?= __('Add Oferta') ?></legend>
        <?php
            echo $this->Form->control('materia_id', ['options' => $materias]);
            echo $this->Form->control('periodo_id', ['options' => $periodos]);
            echo $this->Form->control('estatus');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
