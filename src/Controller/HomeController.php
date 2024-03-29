<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController
{
    function index(){
    }

	function salvar() {
		$local = $this->request->getData('local');
		$propriedade = $this->request->getData('propriedade');
		$conteudo = $this->request->getData('conteudo');
		$this->bd[$local][$propriedade] = $conteudo;
		$this->aplicaHome();
		$this->salvarJson();
		echo strtoupper($propriedade). ' atualizado para: '.$conteudo;
	}

    function adminIndex(){

    	$this->loadComponent('Login');
        $this->viewBuilder()->setLayout('admin');
    	$this->viewBuilder()->setTemplate('index');
    }

    function adminLogin(){
    	//$this->loadComponent('Login');

       	$this->viewBuilder()->setTemplate('login');
    	$this->set('navNomeUser', 'Rafael Rocha');
    }

}
