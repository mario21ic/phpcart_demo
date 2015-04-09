<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends MY_Model
{
    private $__fields = array(
        array('nombre', 'Nombre', 'required|max_length[120]'),
        array('url', 'Url', 'required|max_length[225]'),
        array('parent_id', 'Padre', 'max_length[20]'),
    );

    function __construct()
    {
        parent::__construct();
        $this->setTabla('menu');
    }

    function getByParentId($parent_id, $limit=10, $offset=0) {
        return $this->getBy(array('parent_id' => $parent_id), $limit, $offset);
    }
}
