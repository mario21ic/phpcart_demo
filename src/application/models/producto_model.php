<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto_model extends MY_Model
{
    function __construct() {
        parent::__construct();
        $this->setTabla('producto');
        $this->setFields(array(
            array('nombre', 'Nombre', 'required|max_length[120]'),
            array('precio', 'Precio', 'required|max_length[20]'),
            array('foto', 'Foto', 'max_length[32]'),
            array('resumen', 'Resumen', 'required|max_length[225]'),
            array('descripcion', 'Descripción', 'max_length[400]'),
        ));
    }

    function getByCategoria($categoria_id, $limit=10, $offset=0) {
        return $this->getBy(array('categoria' => $categoria_id), $limit, $offset);
    }
}
