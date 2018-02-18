<div class="users form large-10 medium-9 columns content">
    <?= $this->Form->create($months) ?>
    <fieldset>
        <legend><?= __('New Months') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('remarks');
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
