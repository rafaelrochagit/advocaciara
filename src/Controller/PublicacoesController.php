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
class PublicacoesController extends AppController
{
    function index(){
        
    }

    function salvar() {
		$local = $this->request->getData('local');
		$propriedade = $this->request->getData('propriedade');
		$conteudo = $this->request->getData('conteudo');
		$this->bd[$local][$propriedade] = $conteudo;
		$this->aplicaPublicacoes();
		$this->salvarJson();
		echo strtoupper($propriedade). ' atualizado para: '.$conteudo;
	}

	function salvarArquivo1(){
		$this->salvarArquivo(1);
	}

	function salvarArquivo2(){
		$this->salvarArquivo(2);
	}

    function salvarArquivo($index = 1) {
		$file = $this->request->getData('arquivo');
		$ext = end((explode(".",$file['name'])));
		$arquivoNome = "publicacao-arquivo-".$index.".pdf";
		if($ext != "pdf") {
			$this->Flash->error("Falha ao salvar arquivo! O arquivo deve ter formato pdf (formato enviado: .".$ext.")");
		}
        else if (move_uploaded_file($file['tmp_name'], WWW_ROOT .DS. 'arquivos'.DS.$arquivoNome)) {
			$arquivo_path = "webroot".DS."arquivos".DS.$arquivoNome;
			$propriedade = "arquivo".$index."_path";
			$this->bd['publicacoes'][$propriedade] = $arquivo_path;
			$this->aplicaPublicacoes();
			$this->salvarJson();
            $this->Flash->success("Arquivo salvo com sucesso!");
        } else {
            $this->Flash->error("Falha ao salvar arquivo!");
        }
		$this->redirect('/#publicacoes');
	}
}
