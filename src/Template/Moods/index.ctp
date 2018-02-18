<div class="users index large-10 medium-8 columns content">
    <h3><?= __('Moods') ?></h3>
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
            <?php foreach ($moods as $mood): ?>
            <tr>
                <td><?= $this->Number->format($mood->id) ?></td>
                <td><?=$this->Html->link($mood->name, ['action' => 'view', $mood->id])?></td>
                <td><?= h($mood->remarks) ?></td>
                <td><?= h($mood->created) ?></td>
                <td><?= h($mood->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mood->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mood->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mood->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mood->id)]) ?>
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
