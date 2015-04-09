<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    private $__tabla;

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->__tabla = 'moderador';
        $this->load->library('session');
    }

    public function sessionExist()
    {
        return (boolean)$this->session->userdata('mid');
    }

    public function sessionClose() {
        $this->session->sess_destroy();

        return TRUE;
    }

    public function sessionInit($credential)
    {
        if ($credential->id>0 && $credential->rid>0) {
            $this->session->set_userdata('id', $credential->id);
            $this->session->set_userdata('username', $credential->username);
            $this->session->set_userdata('password', $credential->password);
            $this->session->set_userdata('moderador_rol', (int)$credential->rid);

            return TRUE;
        }
        return FALSE;
    }

    public function validCredential($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get($this->__tabla);
        return $query->row();
    }

    public function validRol($rol)
    {
        return ($this->session->userdata('moderador_rol') <= $rol);
    }
}
