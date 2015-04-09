<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    protected $__tabla;
    protected $__primary_key = 'id';
    protected $__fields;
    protected $__fields_extra = array(
        array('activo', 'Activo', ''),
        array('created_at', 'Creado', ''),
        array('updated_at', 'Modificado', ''),
    );
    protected $__relations;

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function setTabla($tabla) {
        $this->__tabla = $tabla;
    }

    function getTabla() {
        return $this->__tabla;
    }

    function setPrimaryKey($primary_key) {
        $this->__primary_key = $primary_key;
    }

    function getPrimaryKey() {
        return $this->__primary_key;
    }

    function setFields($fields) {
        $this->__fields = $fields;
    }

    function getFields() {
        return $this->__fields;
    }

    function setFieldsExtra($fields) {
        $this->__fields = $fields;
    }

    function getFieldsExtra() {
        return $this->__fields_extra;
    }

    function setRelations($relations) {
        $this->__relations = $relations;
    }

    function getRelations() {
        return $this->__relations;
    }

    function save($data = array()) {
        var_dump($data);
        if (is_array($data)) {
            $data[$this->__primary_key] = ((int) (isset($data[$this->__primary_key])) ? $data[$this->__primary_key] : null);
            if ($data[$this->__primary_key]>0) {
                $data['updated_at'] = time();
                $this->db->where($this->__primary_key, $data[$this->__primary_key]);
                $this->db->update($this->__tabla, $data);
            } else {
                unset($data['id']);
                #$data['created_at'] = date("Y-m-d H:i:s", time());
                $this->db->insert($this->__tabla, $data);
            }
            return $this->db->affected_rows();
        }
        return FALSE;
    }

    function getBy($wheres=array(), $limit=10, $offset=0) {
        foreach ($wheres as $field => $value) {
            $this->db->where($field, $value);
        }
        $this->db->order_by($this->__primary_key, 'DESC');
        $query = $this->db->get($this->__tabla, $limit, $offset);
        $items = array();
        foreach ($query->result() as $item) {
            $items[$item->{$this->__primary_key}] = $item;
        }
        return $items;
    }

    function getLast($wheres=array()) {
        return $this->getBy($wheres, $limit = 1);
    }

    function getCount() {
        return $this->db->count_all($this->__tabla);
    }

    // TODO: Verificar acceso a relaciones recursivas, no cargar lazzy loading en webservice
    function get($id) {
        $this->db->where($this->__primary_key, (int)$id);
        $query = $this->db->get($this->__tabla);
        $data = $query->row();
        if (count($this->__relations)>0) {
            foreach($this->__relations as $relation) {
                #$query = $this->db->get_where($relation['tabla'], array($relation['campo'] => $data->{$relation['name']}));
                #$query = $this->db->get_where($relation['tabla'], array('activo' => 1));
                $sub_query = $this->db->get($relation['tabla']);
                $sub_items = array();
                foreach ($sub_query->result() as $sub_item) {
                    if ($sub_item->{$relation['campo']}==$data->{$relation['name']}) {
                        $sub_item->selected = 1;
                    }
                    # TODO change id by its primary key
                    $sub_items[$sub_item->id] = $sub_item;
                }
                #die(var_dump($data, $relation, 'xD',$sub_items));
                $data->{$relation['name']} = $sub_items;
            }
        }
        #die(var_dump($data));
        return $data;
    }

    function delete($id) {
        return $this->db->delete($this->__tabla,
            array($this->__primary_key => (int)$id));
    }
}
