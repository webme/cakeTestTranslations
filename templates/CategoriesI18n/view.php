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
            <?= $this->Html->link(__('Edit Categories I18n'), ['action' => 'edit', $categoriesI18n->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categories I18n'), ['action' => 'delete', $categoriesI18n->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesI18n->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categories I18n'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categories I18n'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoriesI18n view content">
            <h3><?= h($categoriesI18n->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Locale') ?></th>
                    <td><?= h($categoriesI18n->locale) ?></td>
                </tr>
                <tr>
                    <th><?= __('Field') ?></th>
                    <td><?= h($categoriesI18n->field) ?></td>
                </tr>
                <tr>
                    <th><?= __('Content') ?></th>
                    <td><?= h($categoriesI18n->content) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($categoriesI18n->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Model') ?></th>
                    <td><?= $this->Number->format($categoriesI18n->model) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foreign Key') ?></th>
                    <td><?= $this->Number->format($categoriesI18n->foreign_key) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
