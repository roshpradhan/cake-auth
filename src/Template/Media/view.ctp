<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Media $media
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Media'), ['action' => 'edit', $media->m_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Media'), ['action' => 'delete', $media->m_id], ['confirm' => __('Are you sure you want to delete # {0}?', $media->m_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Media'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Media'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="media view large-9 medium-8 columns content">
    <h3><?= h($media->m_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Flag1') ?></th>
            <td><?= h($media->flag1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flag2') ?></th>
            <td><?= h($media->flag2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flag3') ?></th>
            <td><?= h($media->flag3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('M Id') ?></th>
            <td><?= $this->Number->format($media->m_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($media->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Path') ?></h4>
        <?= $this->Text->autoParagraph(h($media->path)); ?>
    </div>
</div>
