<div class="users form large-10 medium-9 columns content">
    <?= $this->Form->create($destinations) ?>
    <fieldset>
        <legend><?= __('New Destinations') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('remarks');
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
