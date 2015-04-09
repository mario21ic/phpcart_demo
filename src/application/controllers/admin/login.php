<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model', '', TRUE);
    }

    public function index()
    {
        if ($this->login_model->sessionExist()) {
            $this->gotoDashboard();
        }

        if ($_POST) {
            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);
            $credential = $this->login_model->validCredential($username, $password);
            if ($credential) {
                $this->login_model->sessionInit($credential);
                $this->gotoDashboard();
            }
        }
        $this->load->view('admin/login');
    }

    private function gotoDashboard()
    {
        redirect('/admin/dashboard');
    }
}
