<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delivery extends Frontend {

    public function index()
    {
        $this->masterpage->setLayout('delivery');
        $this->masterpage->show(array('micadena' => 'xD'));
    }
}
