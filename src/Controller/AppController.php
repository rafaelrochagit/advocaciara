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

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $path = APP. 'bd' . DS . "bd.json";
    public $bd = array();
    public $conteudoHome = array("titulo" => "", "subtitulo" => "");
    public $conteudoQuemSomos = array();
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        if($this->request->is('ajax') && $this->request->is('post')) {
			$this->autoRender=false;
		}
        $session = $this->request->getSession();
        $usuario = $session->read('Usuario');

        $editavel = '';
        $editavelSimples = '';
        if ($usuario) {
            $this->set('usuario', $usuario['usuario']);
            $editavel = 'editavel';
            $editavelSimples = 'editavelSimples';
        }
        $this->set('editavel', $editavel);
        $this->set('editavelSimples', $editavelSimples);

        $this->inicializaBd();
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function validateDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    public function inicializaBd() 
    {
        $this->lerJson();
        if(!file_exists($this->path)) 
        {
            //$this->salvarJson();
        }
        $this->salvarJson();
        $this->set('conteudoHome', $this->conteudoHome);
        $this->set('conteudoQuemSomos', $this->conteudoQuemSomos);
    }

    public function lerJson()
    {
        if (file_exists($this->path)) {
            $bdJson = file_get_contents($this->path, true);
            $this->bd = json_decode($bdJson, true);
        } 
        $this->aplicaHome();
        $this->aplicaQuemSomos();
    } 

    public function salvarJson() {
        $bd["home"] = $this->conteudoHome;
        $bd["quem_somos"] = $this->conteudoQuemSomos;
        $bdJson = json_encode($bd);
        file_put_contents($this->path, $bdJson);
    }

    public function aplicaHome()
    {
        $titulo = "RA ADVOCACIA";
        $subtitulo = "ASSESSORIA JURÍDICA";
        $instagram = "https://instagram.com/ADVOCACIARA";
        $whatsapp = "61982749910";
        $youtube = "https://www.youtube.com/channel/UChmZsNK1UDpOo_bGFytxLoA";
        $facebook = "https://www.facebook.com/ra.advocacia.midias";
        $conteudoHome = isset($this->bd["home"]) ? $this->bd["home"] : array();
        $this->conteudoHome["titulo"] = $this->aplicaOuInicializaComPadrao($conteudoHome, "titulo", $titulo);
        $this->conteudoHome["subtitulo"] = $this->aplicaOuInicializaComPadrao($conteudoHome, "subtitulo", $subtitulo);
        $this->conteudoHome["instagram"] = $this->aplicaOuInicializaComPadrao($conteudoHome, "instagram", $instagram);
        $this->conteudoHome["whatsapp"] = $this->aplicaOuInicializaComPadrao($conteudoHome, "whatsapp", $whatsapp);
        $this->conteudoHome["youtube"] = $this->aplicaOuInicializaComPadrao($conteudoHome, "youtube", $youtube);
        $this->conteudoHome["facebook"] = $this->aplicaOuInicializaComPadrao($conteudoHome, "facebook", $facebook);
    }

    public function aplicaQuemSomos()
    {
        $titulo = "Quem Somos";
        $icone = "fa-balance-scale";
        $paragrafo1 = "<b>RA ADVOCACIA</b> tem sua conduta baseada na Ética, tanto no relacionamento com o cliente quanto 
        com os demais integrantes da relação jurídica, atuando de forma estratégica na estruturação de teses jurídicas e na avaliação dos 
        riscos, em sintonia com os anseios da sociedade e do mundo globalizado.";
        $paragrafo2 = "Dr. Renato Araújo Jr, Advogado Criminalista, Pós-Graduado, OAB/DF 55.873, 
        possui mais 12 anos de experiência no serviço público (Federal e Estadual), 
        atua de forma prática e objetiva na advocacia criminal, inclusive em casos complexos.";
        $paragrafo3 = "Com objetivo de apresentar soluções rápidas, eficientes e seguras, tanto no contencioso quanto no preventivo. 
        RA Advocacia atua com Excelência na área Criminal, Cível e Administrativa.";
        $paragrafo4 = "Com atendimento de qualidade e alto nível. Conta com profissionais capacitados, em constante atualização, 
        possibilitando a integração do conhecimento em suas áreas de especialização, potencializando os resultados em favor do cliente.";
        $conteudoQuemSomos = isset($this->bd["quem_somos"]) ? $this->bd["quem_somos"] : array();
        $this->conteudoQuemSomos["titulo"] = $this->aplicaOuInicializaComPadrao($conteudoQuemSomos, "titulo", $titulo);
        $this->conteudoQuemSomos["icone"] = $this->aplicaOuInicializaComPadrao($conteudoQuemSomos, "icone", $icone);
        $this->conteudoQuemSomos["paragrafo1"] = $this->aplicaOuInicializaComPadrao($conteudoQuemSomos, "paragrafo1", $paragrafo1);
        $this->conteudoQuemSomos["paragrafo2"] = $this->aplicaOuInicializaComPadrao($conteudoQuemSomos, "paragrafo2", $paragrafo2);
        $this->conteudoQuemSomos["paragrafo3"] = $this->aplicaOuInicializaComPadrao($conteudoQuemSomos, "paragrafo3", $paragrafo3);
        $this->conteudoQuemSomos["paragrafo4"] = $this->aplicaOuInicializaComPadrao($conteudoQuemSomos, "paragrafo4", $paragrafo4);
    }

  

    private function aplicaOuInicializaComPadrao($conteudo, $indice, $padrao = "")
    {
        return isset($conteudo[$indice]) ? $conteudo[$indice] : $padrao;
    }
}
