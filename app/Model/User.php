<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 8/11/14
 * Time: 5:43 PM
 */

App::uses('AppModel', 'Model');

class User extends AppModel {
    public $useDbConfig = 'default';
    public $useTable = 'users';
} 