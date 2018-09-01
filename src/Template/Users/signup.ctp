<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
  <fieldset>
    <legend>SignUp</legend>
    
    <div class="form-group">
        <div class="col-lg-10">
            <?php echo $this->Form->control('email',['placeholder'=>'Enter Your Email','class'=>'form-control']);?>
        </div>
    </div>
    <div class="form-group"> 
        <div class="col-lg-10">
            <?php echo $this->Form->control('phone',['placeholder'=>'Your Phone Number','class'=>'form-control']);?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-10">
            <?php echo $this->Form->control('password',['type'=>'password','placeholder'=>'Your Password','class'=>'form-control']);?>
        </div>
    </div>
    </fieldset>
    <?= $this->Form->button(__('Signup'),['class'=>'btn btn-success']) ?>
  </fieldset>
  <?= $this->Form->end() ?>
</div>
