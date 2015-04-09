<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pararegalar extends Frontend {

    public function index() {
        $this->load->model('producto_model');
        $this->load->model('categoria_model');
        $this->masterpage->setLayout('para-regalar');
        $this->masterpage->show(array(
            'items' => $this->producto_model->getByCategoria($this->config->item('para_regalar')),
            'categorias' => $this->categoria_model->getBy()
        ));
    }
}
