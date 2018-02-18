<div class="users view large-10 medium-9 columns content">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Filter') ?></th>
            <td><?= h($filters->filter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remarks') ?></th>
            <td><?= h($filters->remarks) ?></td>
        </tr>
        
    </table>
    <div class="related">
        <?php 

            switch ($filters->id) {
                case 1:
                    $filter='Months';
                    break;
                case 2:
                   $filter='Destinations';
                    break;
                case 3:
                   $filter='Moods';
                    break;
                
                default:
                    
                    break;
            }
                ?>
        <h4><?= __($filter) ?></h4>
        <?php if (!empty($filters->filtervalues)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($filters->filtervalues as $filtervalues): ?>
            <tr>
                <td><?= h($filtervalues->id) ?></td>
                <td><?=$this->Html->link($filtervalues->value, ['controller'=>'menus','action' => 'package', $filtervalues->id])?></td>
                <td class="actions">
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
