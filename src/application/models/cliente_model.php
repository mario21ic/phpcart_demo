<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente_model extends MY_Model
{
    function __construct() {
        parent::__construct();
        $this->setTabla('cliente');
        $this->setFields(array(
            array('nombre', 'Nombre', 'required|max_length[225]', 'text'),
            array('slug', 'Nombre', 'required|max_length[120]'),
            array('descripcion', 'Descripcion', 'required|max_length[225]'),
            array('foto', 'Foto', 'max_length[32]'),
        ));
    }
}
