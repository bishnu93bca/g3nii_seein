<div class="users form large-10 medium-9 columns content">
    <?= $this->Form->create($moods) ?>
    <fieldset>
        <legend><?= __('New Moods') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('remarks');
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
