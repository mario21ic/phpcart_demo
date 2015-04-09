<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nosotros extends Frontend {

    public function index()
    {
        #$this->load->view('nosotros');
        $this->masterpage->setLayout('nosotros');
        $this->masterpage->show(array('micadena' => 'xD'));
    }
}
