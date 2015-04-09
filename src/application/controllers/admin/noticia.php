<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticia extends BackendCRUD
{
    private $__categorias;

    public function __construct()
    {
        parent::__construct();
        $this->setRol(2);
        $this->setModule('producto');
        $this->load->model('categoria_model');
        $this->__categorias = $this->categoria_model->getBy();
    }

    public function index() {
        $data['categorias'] = $this->__categorias;
        parent::index($data);
    }

    public function nuevo() {
        $data['categorias'] = $this->__categorias;
        parent::nuevo($data);
    }

    protected function _processForm($data=array()) {
        $data['slug'] = url_title($data['nombre'], '-', TRUE);

        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']= '100'; 
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            #$data['upload_data'] = $this->upload->data();
            $upload_data = $this->upload->data();
            $data['foto'] = $upload_data['file_name'];
        }
        #die(var_dump($upload_data, $data));
        parent::_processForm($data);
    }
}
