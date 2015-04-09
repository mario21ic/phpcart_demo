<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedido extends BackendCRUD
{
    public function __construct()
    {
        parent::__construct();
        $this->setRol(1);
        $this->setModule('pedido');
    }
}
