<div class="bookmarks view large-10 medium-9 columns content">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('') ?></th>
            <td><?= $this->Html->link($filtervalues->filter->filter, ['controller' => 'menus', 'action' => 'filter', $filtervalues->filter->id]) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('') ?></th>
            <td><?= h($filtervalues->value) ?></td>
        </tr>
        
        
    </table>
    <div class="related">
        <h4><?= __('Package') ?></h4>
        <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Budget') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Flights') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Days') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nights') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
           <?php foreach ($packages as $package): ?>
            <tr>
                <td><?= $this->Number->format($package->id) ?></td>
                <td>
                    <?=$this->Html->link($package->package_name, ['controller' => 'packages', 'action' => 'view', $package->id])?>
                </td>
                <td><?= h($package->budget) ?></td>
                <td>
                    <?php 
                        if($package->flights==1){
                            if($package->flight_on=='D'){
                                echo "Domestic";
                            }else{
                                echo "International";
                            }
                        }else{ 
                            echo "No Flights";
                        }
                    ?>
                </td>
                <td><?= h($package->days) ?></td>
                <td><?= h($package->nights) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'packages','action' => 'view', $package->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'packages','action' => 'edit', $package->id]) ?>
                    <?= $this->Html->link(__('Delete'), ['controller' => 'packages','action' => 'delete', $package->id]) ?>
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
</div>
