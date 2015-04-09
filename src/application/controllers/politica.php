<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Politica extends Frontend {

    public function index()
    {
        $this->masterpage->setLayout('politica');
        $this->masterpage->show(array('micadena' => 'xD'));
    }
}
