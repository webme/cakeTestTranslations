<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriesI18n[]|\Cake\Collection\CollectionInterface $categoriesI18n
 */
?>
<div class="categoriesI18n index content">
    <?= $this->Html->link(__('New Categories I18n'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categories I18n') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('locale') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th><?= $this->Paginator->sort('foreign_key') ?></th>
                    <th><?= $this->Paginator->sort('field') ?></th>
                    <th><?= $this->Paginator->sort('content') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categoriesI18n as $categoriesI18n): ?>
                <tr>
                    <td><?= $this->Number->format($categoriesI18n->id) ?></td>
                    <td><?= h($categoriesI18n->locale) ?></td>
                    <td><?= $this->Number->format($categoriesI18n->model) ?></td>
                    <td><?= $this->Number->format($categoriesI18n->foreign_key) ?></td>
                    <td><?= h($categoriesI18n->field) ?></td>
                    <td><?= h($categoriesI18n->content) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categoriesI18n->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriesI18n->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriesI18n->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesI18n->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
