<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
 
class ContatosController extends AppController {

	public $uses = array(); // Não utiliza nenhum model

	public function enviar() {
		// Envia a mensagem ou salva os dados no banco
		// $this->data() contém os campos enviados pelo formulário
		
		// var_dump($this->request->data);
        // exit;

		$this->set('data', $this->request->data);
		
		
		      
        $nome = $this->request->data['name'];
        $mail = $this->request->data['email'];
        $msg = $this->request->data['message'];
       
        
        $email = new CakeEmail();
        $email->config('smtp');
        $email->template('contato');
        $email->emailFormat('html');
        $email->viewVars(array('nome' => $nome,  'msg' => $msg, 'mail' =>$mail));
        
		$email->from(array('ricardo@ricardofideles.com.br' => 'Contato do site'));
        $email->to('ricardo@ricardofideles.com.br');
        $email->subject('Contato do site - Ricardo Fideles');
        $email->send('Mensagem');
	}

}