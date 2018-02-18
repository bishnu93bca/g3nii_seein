<div class="users index large-10 medium-8 columns content">
    <h3><?= __('Filter') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('remarks') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($months as $month): ?>
            <tr>
                <td><?= $this->Number->format($month->id) ?></td>
                <td><?=$this->Html->link($month->name, ['action' => 'view', $month->id])?></td>
                <td><?= h($month->remarks) ?></td>
                <td><?= h($month->created) ?></td>
                <td><?= h($month->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $month->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $month->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $month->id], ['confirm' => __('Are you sure you want to delete # {0}?', $month->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
