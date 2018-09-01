<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <div>
     <h1>User Profile</h1>
    </div>
    <div>
     <?= $this->Html->link(__($user->email), ['action' => 'view', $user->id]) ?><br>
     <h5>Profile Created:<?= $this->Time->timeagoinwords($user->created)?></h5>
    </div>
    <hr>
    <h3 style="color:teal">Informations: </h3>
    <div class="container2">
        <div class="box">
                <div class='details'><h5>User ID::<?php echo $user->id?></h5></div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class='details'><h5>India</h5></div>
            </div>
        </div>
    <hr>
    <h3 style="color:teal">Contact: </h3>
    <div class="container2">
        <div class="box">
            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
            <div class='details'><h5><?php echo $user->phone?></h5></div>
        </div>
        <div class="box text-center">
            <div class="icon text-center"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <div class='details text-center'><h5><?php echo $user->email?></h5></div>
        </div>
    </div>
   
</div>
