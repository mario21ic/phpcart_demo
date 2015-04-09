<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Moderador extends BackendCRUD
{
    public function __construct()
    {
        parent::__construct();
        $this->setRol(1);
        $this->setModule('moderador');
    }
}
