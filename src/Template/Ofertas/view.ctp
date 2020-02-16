<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Oferta $oferta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Oferta'), ['action' => 'edit', $oferta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Oferta'), ['action' => 'delete', $oferta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oferta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ofertas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Oferta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periodos'), ['controller' => 'Periodos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ofertas view large-9 medium-8 columns content">
    <h3><?= h($oferta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Materia') ?></th>
            <td><?= $oferta->has('materia') ? $this->Html->link($oferta->materia->id, ['controller' => 'Materias', 'action' => 'view', $oferta->materia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo') ?></th>
            <td><?= $oferta->has('periodo') ? $this->Html->link($oferta->periodo->id, ['controller' => 'Periodos', 'action' => 'view', $oferta->periodo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estatus') ?></th>
            <td><?= h($oferta->estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($oferta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($oferta->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($oferta->modified) ?></td>
        </tr>
    </table>
</div>
