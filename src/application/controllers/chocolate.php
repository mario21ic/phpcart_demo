<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chocolate extends Frontend {

    /*
    function _remap($id, $params=NULL) {
        if ($params==NULL) $params[0]=NULL;
        $this->index($id, $params[0]);
    }
    */

    #public function index($categoria_id, $id) {
    public function index($id) {
        #var_dump($categoria_id, $id);
        $this->masterpage->setLayout('chocolate');
        $this->load->model('producto_model');
        $data['item'] = $this->producto_model->get($id);
        $this->masterpage->show($data);
    }
}
