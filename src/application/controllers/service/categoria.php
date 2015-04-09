<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria extends Restful {

    public function __construct() {
        parent::__construct();
        $this->setModel('categoria_model');
    }

}
