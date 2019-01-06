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

$cakeDescription = 'RA Advocacia';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?= $this->request->getParam('_csrfToken') ?>" />
    <link rel="shortcut icon" href="<?= $this->Url->image('favicon3.png')?>" type="image/x-icon">
    <title>
        <?= $cakeDescription ?>
    </title>

    <link rel="stylesheet" type="text/css" href="//daneden.github.io/animate.css/animate.min.css">
    <?= $this->Html->css('layout.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('fontawesome-free-5.6.3/css/all.min.css') ?>

    <?= $this->Html->script('jquery.min.js')?>
    <?= $this->Html->script('jquery.backtotop.js')?>
    <?= $this->Html->script('jquery.mobilemenu.js')?>
    <!-- IE9 Placeholder Support -->
    <?= $this->Html->script('jquery.placeholder.min.js')?>
    <?= $this->Html->script('jquery.maskedinput.min.js')?>

    <?= $this->Html->script('bootstrap.min.js')?>
</head>
<body id="top">
    <!-- Top Background Image Wrapper -->
    <?= $this->element('header'); ?>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <?= $this->element('footer'); ?>
 
    <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
    
</body>
</html>
