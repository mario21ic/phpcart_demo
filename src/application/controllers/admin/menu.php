<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends BackendCRUD
{
    public function __construct()
    {
        parent::__construct();
        $this->setRol(1);
        $this->setModule('menu');
        $this->load->model('menu_model');
        $this->__menus = $this->menu_model->getBy();
    }

    public function index() {
        $data['menu'] = $this->__menus;
        parent::index($data);
        /*
        $data['items'] = $this->categoria_model->getBy(array('categoria' => 1));
        $this->masterpage->setLayout($this->getPathView() . 'index');
        $this->masterpage->show($data);
         */
    }

    public function nuevo() {
        $data['categorias'] = $this->__categorias;
        parent::nuevo($data);
    }

    protected function _processForm($data=array()) {
        $data['slug'] = url_title($data['nombre'], '-', TRUE);
        parent::_processForm($data);
    }
}
