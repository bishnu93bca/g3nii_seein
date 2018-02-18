<div class="bookmarks index large-10 medium-9 columns content">
    <?php 
    $budget_options = array(
        'yes'   => 'yes', 
        'no'    => 'no', 
        'maybe' =>  'maybe'
        );
    echo $this->Form->input('budget_range', array('type'=>'radio', 'options'=>$budget_options, 'label'=> false));
?>
    <h3><?= __('Contacts Us') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Package') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $this->Number->format($contact->id) ?></td>
                <td><?= h($contact->name)?></td>
                <td><?= h($contact->email) ?></td>
                <td><?= h($contact->mobile) ?></td>
                <td>
                    <?=$this->Html->link($contact->package->package_name, ['controller' => 'packages', 'action' => 'adminview', $contact->package->id])?>
                </td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>
                    <?= $this->Html->link(__('Delete'), ['action' => 'delete', $contact->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


