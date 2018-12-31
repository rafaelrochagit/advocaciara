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
class ContatoController extends AppController
{
    function index(){
        
    }

    function sendEmail(){
		if($this->request->is('ajax')) {
			$this->autoRender=false;
		}
		$dados = $this->request->getData();
		debug($dados);
		$email = new Email('templated');
		$email->setEmailFormat('html');
		$email->setViewVars($dados)
			->setSubject('Contato Site - '.$dados['nome'])
			->setTo('advocaciara.site@gmail.com')
		    ->setFrom('contato@advocaciara.com');
		if($email->send()){
			echo 'Enviado com sucesso!';
		}else{
			echo 'Aconteceu algum erro no envio!';
		}
    }
}
