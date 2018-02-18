<div class="users view large-10 medium-9 columns content">
    <h3><?= h($moods->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Months') ?></th>
            <td><?= h($moods->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remarks') ?></th>
            <td><?= h($moods->remarks) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($moods->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($moods->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($moods->modified) ?></td>
        </tr>
    </table>
</div>
