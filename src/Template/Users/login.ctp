<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-9 medium-8 columns content">
</div>
<div class="container">
    <div class="row">
        <div class=col-sm-1></div>
        <div class="col-sm-10" style="border:1px solid;border-color:teal;">
            <div class="row">
                <div class="col-sm-5">
                    <img src="img/loginHeading.png" style="margin-left:15%;margin-top:30%"/>
                    <img src="img/loginText.gif" style="margin-left:15%"/>
                </div>
                <div class="col-sm-7">
                    <div class="panel " style="margin-top:15px">
                        <div class="panel-heading" style="border:1px solid;border-color:teal;">
                             <h6 class="panel-title text-center" style="margin-top:8px"><span class="glyphicon glyphicon-user"></span> Login</h6>
                        </div>
                        <div>
                            <?= $this->Form->create() ?>
                            <fieldset>
                                <div class="form-group">
                                    <?php
                                        echo $this->Form->control('email');
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php
                                        echo $this->Form->control('password');
                                    ?>
                                </div>
                                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-lg btn-block']) ?>
                                <ul class="side-nav text-center">
                                    <li>Or<?= $this->Html->link(__('SignUp'), ['action' => 'signup']); ?></li>
                                    <li>For Cake-Auth Account</li>
                                </ul>
                            </fieldset>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=col-sm-1>
        </div>
    </div>
    
</div>

