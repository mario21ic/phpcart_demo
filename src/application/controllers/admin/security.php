<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Security extends CI_Controller
{
    private $__rol;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');

        if ($this->session->userdata('username')==null) {
            redirect('/admin/login');
        }
    }

    protected function setRol($rol)
    {
        $this->__rol = $rol;
        $this->load->model('login');
        if (!$this->login->validRol($this->__rol)) {
            die('Permiso denegado <a href="javascript:history.go(-1)">Regresar</a>');
        }
    }
}
