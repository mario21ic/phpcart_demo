<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Celebracionesespeciales extends Frontend {

    public function index()
    {
        $this->load->model('producto_model');
        $this->load->model('categoria_model');
        $this->masterpage->setLayout('celebraciones-especiales');
        $this->masterpage->show(array(
            'items' => $this->producto_model->getByCategoria($this->config->item('celebraciones_especiales')),
            'categorias' => $this->categoria_model->getBy()
        ));
    }
}
