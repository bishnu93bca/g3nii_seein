<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Seeingo.com';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="<?php echo BASE_URL; ?>img/favicon.png" type="image/x-icon" />
        <title>Seeingo.com :: Admin</title>


    <?php echo $this->Html->script(["jquery.min", "bootstrap.min", "bootstrap-waitingfor.min", "https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"]);?>
    <?= $this->Html->css(['base.css','http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css']) ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    

</head>
<body><?php $id=2; if(!empty($id)){?>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-2 medium-3 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><?= $this->Html->link(__('Destination'), ['controller' => 'menus', 'action' => 'filter',2]) ?></li>
                <li><?= $this->Html->link(__('Moods'), ['controller' => 'menus', 'action' => 'filter',3]) ?></li>
                <li><?= $this->Html->link(__('Months'), ['controller' => 'menus', 'action' => 'filter',1]) ?></li>
               <li><?= $this->Html->link(__('Seeingo'), ['controller' => 'homes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Contact Us'), ['controller' => 'homes', 'action' => 'index']) ?></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <nav class="large-2 medium-3 columns" id="actions-sidebar">
            <ul class="side-nav">
                <li class="heading"><?= __('Actions') ?></li>
               
                <li><?= $this->Html->link(__('New Package'), ['controller' => 'packages', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('List Package'), ['controller' => 'packages', 'action' => 'admin']) ?></li>  
            </ul>
        </nav>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
   <?php } ?>
</body>
</html> 
