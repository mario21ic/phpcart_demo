<?php

class Moderador_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->setTabla('moderador');
        /*
        $this->setFields(array(
            array('nombre', 'Nombre', 'required|max_length[225]', 'text'),
            array('slug', 'Nombre', 'required|max_length[120]'),
            array('descripcion', 'Descripcion', 'required|max_length[225]'),
            array('foto', 'Foto', 'max_length[32]'),
        ));
         */
    }

    function save($data = array()) {
        if (is_array($data)) {
            $data['id'] = (int)$data['id'];
            if (strlen($data['password'])<32) {
                $data['password'] = md5($data['password']);
            }

            if ($data['id']>0) {
                $this->db->where('id', $data['id']);
                return $this->db->update($this->__tabla, $data);
            }

            return  $this->db->insert($this->__tabla, $data);
        }
        return false;
    }
}
