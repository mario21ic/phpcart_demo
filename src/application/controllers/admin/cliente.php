<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends BackendCRUD
{
    public function __construct()
    {
        parent::__construct();
        $this->setRol(1);
        $this->setModule('cliente');
    }
}
