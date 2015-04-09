<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comentario extends BackendCRUD
{
    public function __construct()
    {
        parent::__construct();
        $this->setRol(2);
        $this->setModule('comentario');
    }
}
