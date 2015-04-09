<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comentario_model extends MY_Model
{
    function __construct() {
        parent::__construct();
        $this->setTabla('comentario');
        $this->setFields(array(
            array('name' => 'nombre', 'label' =>  'Nombre', 'rules' =>  'required|max_length[225]', 'widget' => 'text'),
            array('name' => 'descripcion', 'label' =>  'Descripcion', 'rules' =>  'max_length[225]', 'widget' => 'textarea'),
            array('name' => 'noticia_id', 'label' =>  'Noticia', 'rules' =>  'max_length[32]', 'widget' => 'hidden'),
        ));
    }
}
