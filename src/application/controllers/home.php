<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Frontend {

    public function index() {
        $this->masterpage->setLayout('home');
        $this->masterpage->show(array('micadena' => 'xD'));
    }
}
