<div class="users view large-10 medium-9 columns content">
    <h3><?= h($destinations->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Months') ?></th>
            <td><?= h($destinations->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remarks') ?></th>
            <td><?= h($destinations->remarks) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($destinations->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($destinations->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($destinations->modified) ?></td>
        </tr>
    </table>
</div>
