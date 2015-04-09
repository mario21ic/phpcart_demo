<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carrito extends Frontend {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }

    public function add() {
        if ($_POST) {
            $id = (int) $this->input->post('id', TRUE);
            $this->load->model('producto_model');
            $producto = $this->producto_model->get($id);
            $this->cart->insert(array(
                'id'    => $producto->id,
                'qty'   => (int) $this->input->post('cantidad', TRUE),
                'price' => $producto->precio,
                'name'  => $producto->nombre,
                'foto'  => $producto->foto,
            ));
            redirect('/carrito/');
        }
        return FALSE;
    }

    public function index() {
        $this->masterpage->setLayout('carrito');
        $this->masterpage->show();
    }
}
