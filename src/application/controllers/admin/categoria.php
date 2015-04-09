<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria extends BackendCRUD
{
    public function __construct()
    {
        parent::__construct();
        $this->setRol(1);
        $this->setModule('categoria');
        $this->load->model('categoria_model');
        $this->__categorias = $this->categoria_model->getBy();
    }

    public function index() {
        $data['categorias'] = $this->__categorias;
        parent::index($data);
        /*
        $data['items'] = $this->categoria_model->getBy(array('categoria' => 1));
        $this->masterpage->setLayout($this->getPathView() . 'index');
        $this->masterpage->show($data);
         */
    }

    public function nuevo() {
        $data['items'] = $this->__categorias;
        parent::nuevo($data);
    }

    protected function _processForm($data=array()) {
        $data['slug'] = url_title($data['nombre'], '-', TRUE);
        parent::_processForm($data);
    }
}
