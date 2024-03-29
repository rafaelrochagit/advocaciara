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
class QuemSomosController extends AppController
{
    function index() {
        
    }

    function adminIndex() {
    	$this->viewBuilder()->setLayout('admin');
    	//$this->viewBuilder()->setTemplate('admin_index');
    }

    function salvar() {
		$local = $this->request->getData('local');
		$propriedade = $this->request->getData('propriedade');
		$conteudo = $this->request->getData('conteudo');
		$this->bd[$local][$propriedade] = $conteudo;
		$this->aplicaQuemSomos();
		$this->salvarJson();
		echo strtoupper($propriedade). ' atualizado para: '.$conteudo;
	}

	function salvarImagem($index = 1) {
		$file = $this->request->getData('imagem');
		$ext = end((explode(".",$file['name'])));
		$arquivoNome = "bg-quem-somos".$index.".".$ext;
		$tipos = array("jpeg", "jpg", "png", "gif", "bmp");
		$pathPasta = 'img'.DS.'backgrounds';
		if (array_search($ext, $tipos) === false) {
			$this->Flash->error("Falha ao salvar imagem! O imagem deve ser: jpeg, jpg, png, gif ou bmp. (Formato enviado: ".$ext.")");
		}
        else if (move_uploaded_file($file['tmp_name'], WWW_ROOT.DS.$pathPasta.DS.$arquivoNome)) {
			$arquivo_path = "backgrounds".DS.$arquivoNome;
			$propriedade = "imagem".$index."_path";
			$this->bd['quem_somos'][$propriedade] = $arquivo_path;
			$this->aplicaQuemSomos();
			$this->salvarJson();
            $this->Flash->success("Imagem salva com sucesso!");
        } else {
            $this->Flash->error("Falha ao salvar imagem!");
        }
		$this->redirect('/#quem_somos');
	}

}
