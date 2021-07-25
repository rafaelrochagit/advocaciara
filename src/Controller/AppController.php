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
    public $conteudoHeader = array("titulo" => "", "subtitulo" => "");
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

        $session = $this->request->getSession();
        $usuario = $session->read('Usuario');

        if ($usuario) {
            $this->set('usuario', $usuario['usuario']);
        }

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
        $this->set('conteudoHeader', $this->conteudoHeader);
    }

    public function lerJson()
    {
        if (file_exists($this->path)) {
            $bdJson = file_get_contents($this->path, true);
            $this->bd = json_decode($bdJson, true);
        } 
        $this->aplicaHeader();
    } 

    public function salvarJson() {
        $bd["header"] = $this->conteudoHeader;
        $bdJson = json_encode($bd);
        file_put_contents($this->path, $bdJson);
    }

    public function aplicaHeader()
    {
        $titulo = "RA ADVOCACIA";
        $subtitulo = "ASSESSORIA JURÍDICA";
        $conteudoHeader = isset($this->bd["header"]) ? $this->bd["header"] : array();
        $this->conteudoHeader["titulo"] = $this->aplicaOuInicializaComPadrao($conteudoHeader, "titulo", $titulo);
        $this->conteudoHeader["subtitulo"] = $this->aplicaOuInicializaComPadrao($conteudoHeader, "subtitulo", $subtitulo);
    }

    private function aplicaOuInicializaComPadrao($conteudo, $indice, $padrao = "")
    {
        return isset($conteudo[$indice]) ? $conteudo[$indice] : $padrao;
    }
}
