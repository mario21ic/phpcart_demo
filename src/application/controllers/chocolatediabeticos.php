<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chocolatediabeticos extends Frontend {

    public function index()
    {
        $this->load->model('producto_model');
        $this->load->model('categoria_model');
        $this->masterpage->setLayout('chocolate-diabeticos');
        $this->masterpage->show(array(
            'items' => $this->producto_model->getByCategoria($this->config->item('chocolate_diabeticos')),
            'categorias' => $this->categoria_model->getBy()
        ));
    }
}
