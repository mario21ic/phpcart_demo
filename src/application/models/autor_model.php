<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autor_model extends MY_Model
{
    function __construct() {
        $this->setTabla('autor');
        $this->setFields(array(
            array('name' => 'nombre', 'label' =>  'Nombre', 'rules' =>  'required|max_length[225]', 'widget' => 'text'),
            array('name' => 'slug', 'label' =>  'Slug', 'rules' =>  'required|max_length[225]', 'widget' => 'text'),
            array('name' => 'descripcion', 'label' =>  'Descripcion', 'rules' =>  'max_length[225]', 'widget' => 'textarea'),
            array('name' => 'foto', 'label' =>  'Foto', 'rules' =>  'max_length[32]', 'widget' => 'file'),
        ));
    }
}
