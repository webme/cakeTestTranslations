<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriesI18n $categoriesI18n
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoriesI18n->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesI18n->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Categories I18n'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoriesI18n form content">
            <?= $this->Form->create($categoriesI18n) ?>
            <fieldset>
                <legend><?= __('Edit Categories I18n') ?></legend>
                <?php
                    echo $this->Form->control('locale');
                    echo $this->Form->control('model');
                    echo $this->Form->control('foreign_key');
                    echo $this->Form->control('field');
                    echo $this->Form->control('content');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
