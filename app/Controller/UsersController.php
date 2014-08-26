<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 8/11/14
 * Time: 5:42 PM
 */

App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public $uses = array('User');

    public function login($username, $password) {
        $result = $this->User->find('all', array(
            'conditions' => array(
                'username' => $username,
                'password' => $password
            )
        ));

        if (count($result) == 1) {
            $this->Session->write('user', $result);
            $this->redirect($this->referer());
        } else {

        }
    }
} 