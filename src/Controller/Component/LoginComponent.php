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
 * @since         3.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Http\Exception\InternalErrorException;
use Cake\Utility\Inflector;
use Exception;

/**
 * The CakePHP FlashComponent provides a way for you to write a flash variable
 * to the session from your controllers, to be rendered in a view with the
 * FlashHelper.
 *
 * @method void success(string $message, array $options = []) Set a message using "success" element
 * @method void error(string $message, array $options = []) Set a message using "error" element
 */
class LoginComponent extends Component
{

    /**
     * The Session object instance
     *
     * @var \Cake\Http\Session
     */
    protected $_session;

    // The other component your component uses
    public $components = ['Flash'];

    /**
     * Constructor
     *
     * @param \Cake\Controller\ComponentRegistry $registry A ComponentRegistry for this component
     * @param array $config Array of config.
     */
    public function __construct(ComponentRegistry $registry, array $config = [])
    {
        parent::__construct($registry, $config);
        $this->_session = $registry->getController()->getRequest()->getSession();
        
        $usuario = $this->_session->read('Usuario');
        
        if(!$usuario) {
            $this->Flash->error('Você não tem permissão!');
            $registry->getController()->redirect('/admin/login');    
        }
        //$registry->getController()->set('navNomeUser', $usuario['usuario']);


        
    }
}