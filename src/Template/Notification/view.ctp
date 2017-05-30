<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Notification'), ['action' => 'edit', $notification->NOT_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Notification'), ['action' => 'delete', $notification->NOT_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $notification->NOT_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Notification'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notification'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="notification view large-9 medium-8 columns content">
    <h3><?= h($notification->NOT_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NOT MENSAJE') ?></th>
            <td><?= h($notification->NOT_MENSAJE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NOT TIPO') ?></th>
            <td><?= h($notification->NOT_TIPO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NOT ID') ?></th>
            <td><?= $this->Number->format($notification->NOT_ID) ?></td>
        </tr>
    </table>
</div>
