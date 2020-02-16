<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Oferta[]|\Cake\Collection\CollectionInterface $ofertas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Oferta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodos'), ['controller' => 'Periodos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ofertas index large-9 medium-8 columns content">
    <h3><?= __('Ofertas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('materia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ofertas as $oferta): ?>
            <tr>
                <td><?= $this->Number->format($oferta->id) ?></td>
                <td><?= $oferta->has('materia') ? $this->Html->link($oferta->materia->id, ['controller' => 'Materias', 'action' => 'view', $oferta->materia->id]) : '' ?></td>
                <td><?= $oferta->has('periodo') ? $this->Html->link($oferta->periodo->id, ['controller' => 'Periodos', 'action' => 'view', $oferta->periodo->id]) : '' ?></td>
                <td><?= h($oferta->estatus) ?></td>
                <td><?= h($oferta->created) ?></td>
                <td><?= h($oferta->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $oferta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $oferta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $oferta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oferta->id)]) ?>
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
