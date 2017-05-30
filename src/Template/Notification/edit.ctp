<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $notification->NOT_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $notification->NOT_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Notification'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="notification form large-9 medium-8 columns content">
    <?= $this->Form->create($notification) ?>
    <fieldset>
        <legend><?= __('Edit Notification') ?></legend>
        <?php
            echo $this->Form->input('NOT_MENSAJE');
            echo $this->Form->input('NOT_TIPO');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
