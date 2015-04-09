<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedidoscorporativos extends Frontend {

    public function index()
    {
        $this->load->model('producto_model');
        $this->load->model('categoria_model');
        $this->masterpage->setLayout('pedidos-corporativos');
        $this->masterpage->show(array(
            'items' => $this->producto_model->getByCategoria($this->config->item('pedidos_corporativos')),
            'categorias' => $this->categoria_model->getBy()
        ));
    }
}
