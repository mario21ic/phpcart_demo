<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends Backend
{
    private $__path_view = 'admin/support/';

    public function __construct()
    {
        parent::__construct();
        $this->setRol(2);
        //$this->masterpage->addContentPage($this->__path_view . 'menu', 'Header', array());
    }

    public function index()
    {
        if ($_POST) {
            $nombres = $this->input->post('nombres', true);
            $asunto = $this->input->post('asunto', true);
            $mensaje = $this->input->post('mensaje', true);

            $this->load->library('email');
            $this->email->from('robot@hgs.com.pe', $nombres);
            //$this->email->to('mario21ic@gmail.com');
            $this->email->to('contacto@hgs.com.pe');
            $this->email->cc('jberaunn@gmail.com');
            $this->email->bcc('mario21ic@gmail.com');
            $this->email->subject('Support: ' . $asunto);
            $this->email->message($mensaje);
            $this->email->send();
            $this->session->set_flashdata('mensaje', 'Mensaje enviado con éxito');
            redirect('/admin/support');
        }
        $this->masterpage->setLayout($this->__path_view . 'index');
        $this->masterpage->show();
    }
}
