<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Configuracion $configuracion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Configuraciones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="configuraciones form large-9 medium-8 columns content">
    <?= $this->Form->create($configuracion) ?>
    <fieldset>
        <legend><?= __('Add Configuracion') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('clave');
            echo $this->Form->control('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
