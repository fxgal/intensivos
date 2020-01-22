<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Configuracione[]|\Cake\Collection\CollectionInterface $configuraciones
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Configuracione'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="configuraciones index large-9 medium-8 columns content">
    <h3><?= __('Configuraciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clave') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($configuraciones as $configuracione): ?>
            <tr>
                <td><?= $this->Number->format($configuracione->id) ?></td>
                <td><?= h($configuracione->nombre) ?></td>
                <td><?= h($configuracione->clave) ?></td>
                <td><?= h($configuracione->valor) ?></td>
                <td><?= h($configuracione->created) ?></td>
                <td><?= h($configuracione->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $configuracione->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $configuracione->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $configuracione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $configuracione->id)]) ?>
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
