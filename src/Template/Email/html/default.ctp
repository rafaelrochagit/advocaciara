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

/*$content = explode("\n", $content);*/

/*foreach ($content as $line) :
    echo '<p> ' . $line . "</p>\n";
endforeach;*/
?>
<h2>Nome:</h2>
<?=$nome?>
<h2>Email:</h2>
<?=$email?>
<h2>Telefone:</h2>
<?=$tel?>
<h2>Área Atuação:</h2>
<?=$area?>
<h2>Mensagem:</h2>
<?=$mensagem?>
<?= $this->Html->image("backgrounds/bglogo1.jpg"); ?>