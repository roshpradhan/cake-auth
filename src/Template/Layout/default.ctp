<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = '\m/ cake-PHP Practice';
?>
<!DOCTYPE html>
<html>
<head>

<style>
            body {
            margin:0;
            padding:0;
            font-family:sans-serif;
            background:#002b38;
        }
        .container2 {
            width:900px;
            display:flex;
        }
        .container2 .box {
            position:relative;
            width: 300px;
            height:100px;
            box-sizing:border-box;
            text-align:center;
            margin:0 10px;
            background:#00171d;
            overflow:hidden;
            border-radius:4px;
            box-shadow:0 0 0 2px rgba(0,7,10,1);
        }
        .container2 .box .icon {
            width:100%;
            height:100%;
            background:#00171d;
            transition: 0.5s;
            margin-right:10%;
        }
        .container2 .box .icon .fa {
            font-size: 4em;
            line-height:100px;
            color: #0ff;
        }
        .container2 .box:hover .icon {
            transform:scale(0);
        }
        .container2 .box .details {
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:#03a9f4;
            transition:0.5s;
            transform:scale(2);
            opacity:0;
        }
        .container2 .box:hover .details {
            transform:scale(1);
            opacity:1;
        }
        .container2 .box .details h5 {
            margin:0;
            padding:0;
            line-height:100px;
            font-size:20px;
            color:#fff;
        }
        .container2 .box .details:nth-child(2) .details {
            background:#e91e63;
        }
        .container2 .box .details:nth-child(2) .details {
            background:#607d8b;
        }
        div#loading {
            top: 200 px;
            margin: auto;
            position: absolute;
            z-index: 1000;
            width: auto;
            height: auto;
            background: url(loadingimage.gif) no-repeat;
            cursor: wait;
        }
    </style>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
    <!-- Include the above in your HEAD tag -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <?= $this->Html->meta('icon') ?>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
</head>
<body>
    <div id="loading"></div>
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="name right">
            <?php if($this->request->session()->read('Auth.User.id')){?>

           
                <li>
                    <?= $this->Html->link(__($this->request->session()->read('Auth.User.email')), ['action' => 'index']) ?>
                </a></li>
                <li><?php echo $this->Html->link('Logout',['controller'=>'Users','action'=>'logout']); ?></li>
                <li><?php echo $this->Html->link('Search Portal',['controller'=>'Users','action'=>'search']); ?></li>
            </ul>
            <?php }?>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <div class="row" style="width:auto;padding-top:30px">
                <div class="col-sm-12 text-center" style="padding-top:10px;background-color:teal">
                   <h6 style="color:white">Cake-Auth Footer</h6>
                </div>
    </div>
</body>
</html>
