<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Moderador extends Restful {
    public function __construct() {
        parent::__construct();
        #$this->setModel('moderador_model');
        $this->load->model('moderador_model');
    }

    public function index() {
        $this->output->set_header('Content-type: application/json');
        header('Content-Type: application/json');
        echo json_encode($this->moderador_model->getBy());
        die();
        #return $this->load->view('service/index', array('data' => json_encode($this->moderador_model->get())));
    }
}
