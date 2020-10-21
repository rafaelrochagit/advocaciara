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
use Cake\Mailer\Email;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class LoginController extends AppController
{
   function index() {
     
   }

	function entrar() {
		$this->viewBuilder()->autoLayout(false);
		$this->autoRender = false;  

		$dados = $this->request->getData();
		$dados['senha'] = md5($dados['senha']);

		$login = 'admin';
		$senha = '1d60d77ebbf270fae1c99410b524d7c8';

		if ($login == $dados['usuario'] && $dados['senha'] == $senha) {
			$session = $this->request->getSession();
			$session->write('Usuario', $dados);
			$this->redirect('/admin');
		} else {
			$this->Flash->error('Usuário e ou senha incorretos');
			$this->redirect('/admin/login');
		}	
	} 

	function sair() {
		$session = $this->request->getSession();
		$session->destroy();
		$this->redirect('/admin/login');
	} 
}
