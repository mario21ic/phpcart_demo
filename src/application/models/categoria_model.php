<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria_model extends MY_Model
{
    function __construct() {
        parent::__construct();
        $this->setTabla('categoria');
        $this->setRelations(array(
            array(
                'name' => 'categoria',
                'tabla' => 'categoria',
                'campo' => 'id'
            ),
        ));
        $this->setFields(array(
            array(
                'name' => 'nombre',
                'label' =>  'Nombre',
                'rules' =>  'required|max_length[225]',
                'widget' => 'text'),
            array(
                'name' => 'categoria',
                'label' =>  'Categoria',
                'rules' =>  'max_length[225]',
                'widget' => 'select'),
            array(
                'name' => 'resumen',
                'label' =>  'Resumen',
                'rules' =>  'max_length[225]',
                'widget' => 'textarea'),
        ));
    }

    function getByCategoria($categoria_id, $limit=10, $offset=0) {
        return $this->getBy(array('categoria_id' => $categoria_id), $limit, $offset);
    }

    public function __toString() {
        return 'xD';
    }
}
