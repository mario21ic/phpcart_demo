<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formaspago extends Frontend {

    public function index()
    {
        $this->masterpage->setLayout('formas-de-pago');
        $this->masterpage->show(array('micadena' => 'xD'));
    }
}
