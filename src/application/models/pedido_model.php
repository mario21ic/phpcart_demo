<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedido_model extends MY_Model
{
    private $__fields = array(
        array('nombre', 'Nombre', 'required|max_length[120]'),
        array('resumen', 'Resumen', 'required|max_length[225]'),
    );

    function __construct()
    {
        parent::__construct();
        $this->setTabla('pedido');
    }
}
