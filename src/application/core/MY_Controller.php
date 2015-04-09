<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Restful extends CI_Controller {

    protected $__data;
    protected $__model;

	public function __construct() {
        parent::__construct();
    }

    public function setModel($model) {
        $this->__model = $model;
        $this->load->model($model);
    }

    public function _remap($method) {
        if ($method == 'index') {
            $this->$method();
        } else {
            $this->get($method);
        }
    }

    public function index() {
        $this->output->set_header('Content-type: application/json');
        header('Content-Type: application/json');
        echo json_encode($this->{$this->__model}->getBy());
        die();
        #return $this->load->view('service/index', array('data' => json_encode($this->moderador_model->get())));
    }

    public function get($id) {
        $this->output->set_header('Content-type: application/json');
        header('Content-Type: application/json');
        echo json_encode($this->{$this->__model}->get($id));
        die();
        #return $this->load->view('service/index', array('data' => json_encode($this->moderador_model->get())));
    }

}


class Frontend extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('masterpage');
        $this->masterpage->setMasterPage('default');
    }

    /*
    public function index() {
        $this->masterpage->addContent('content_index', 'content');
        $this->masterpage->show();
    }
    */ 
}


class Security extends CI_Controller {

    private $__rol;

	public function __construct() {
        parent::__construct();

        if ($this->session->userdata('username')==null) {
            redirect('/admin/login');
        }
    }

    protected function setRol($rol)
    {
        $this->__rol = $rol;
        $this->load->model('login_model');
        if (!$this->login_model->validRol($this->__rol))
            die('Permiso denegado <a href="javascript:history.go(-1)">Regresar</a>');
    }
}

class Backend extends Security
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('masterpage');
        $this->masterpage->setMasterPage('admin/default');
    }
}

class BackendCRUD extends Backend
{
    private $__path_view = 'admin/';
    private $__model;
    private $__name;

    public function __construct()
    {
        parent::__construct();
    }

    public function setModule($module) {
        $this->setName($module);
        $this->setModel($module.'_model');
        #$this->setPathView('admin/'.$module.'/');
    }

    public function setName($name) {
        $this->__name = $name;
    }

    public function getName($name) {
        return $this->__name;
    }

    public function setModel($model) {
        $this->__model = $model;
        $this->load->model($model);
    }

    public function getModel() {
        return $this->__model;
    }

    public function setPathView($path) {
        $this->__path_view = $path;
    }

    public function getPathView() {
        return $this->__path_view;
    }

    public function index($data=array()) {
        $this->masterpage->setLayout($this->__path_view . 'list');
        $data = array(
            'primary_key' => $this->{$this->__model}->getPrimaryKey(),
            'fields' => $this->{$this->__model}->getFields(),
            'fields_extra' => $this->{$this->__model}->getFieldsExtra(),
            'items' => $this->{$this->__model}->getBy(),
            'action' => 'Listar',
            'module' => $this->__name,
        );
        $this->masterpage->show($data);
    }

    public function nuevo($data = array()) {
        if($_POST)  {
            $this->_processForm($_POST);
        }
        $this->masterpage->setLayout($this->__path_view . 'form');
        $data = array(
            'primary_key' => $this->{$this->__model}->getPrimaryKey(),
            'fields' => $this->{$this->__model}->getFields(),
            'fields_extra' => $this->{$this->__model}->getFieldsExtra(),
            'action' => 'Nuevo',
            'module' => $this->__name,
        );
        $this->masterpage->show($data);
    }

    public function editar($id) {
        if ($_POST)  {
            $this->_processForm($_POST);
        }
        $data = array(
            'primary_key' => $this->{$this->__model}->getPrimaryKey(),
            'fields' => $this->{$this->__model}->getFields(),
            'fields_extra' => $this->{$this->__model}->getFieldsExtra(),
            'action' => 'Editar',
            'module' => $this->__name,
            'item' => $this->{$this->__model}->get($id),
        );
        $this->masterpage->setLayout($this->__path_view . 'form');
        $this->masterpage->show($data);
    }

    protected function _processForm($data) {
        $this->{$this->__model}->save($data
            /*
            array(
                'id' => $this->input->post('id', true),
                'nombre' => $this->input->post('nombre', true),
                'resumen' => $this->input->post('resumen', true),
            )
             */
        );

        $this->session->set_flashdata('mensaje', 'Se ha guardado con éxito');
        redirect('/admin/'.$this->__name);
    }

    public function eliminar($id) {
        if ($_POST) {
            $id = $this->input->post('id', true);
            if ($this->{$this->__model}->delete($id)) {
                $mensaje = 'Se ha eliminado con éxito';
            } else {
                $mensaje = 'Ha ocurrido un error vuelva a intentarlo';
            }
            $this->session->set_flashdata('mensaje', $mensaje);
            redirect('/admin/'.$this->__name);
        }

        $data = array(
            'primary_key' => $this->{$this->__model}->getPrimaryKey(),
            'fields' => $this->{$this->__model}->getFields(),
            'fields_extra' => $this->{$this->__model}->getFieldsExtra(),
            'action' => 'Eliminar',
            'module' => $this->__name,
            'disabled' => 'disabled="disabled"',
            'item' => $this->{$this->__model}->get($id),
        );
        $this->masterpage->setLayout($this->__path_view . 'form');
        $this->masterpage->show($data);
    }
}
