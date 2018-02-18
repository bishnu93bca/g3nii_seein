<div class="users view large-10 medium-9 columns content">
    <h3><?= h($months->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Months') ?></th>
            <td><?= h($months->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remarks') ?></th>
            <td><?= h($months->remarks) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($months->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($months->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($months->modified) ?></td>
        </tr>
    </table>
</div>
