<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactenos extends Frontend {

    public function index()
    {
        $this->masterpage->setLayout('contactenos');
        $this->masterpage->show(array('micadena' => 'xD'));
    }
}
