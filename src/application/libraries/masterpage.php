<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MasterPage {
    private $masterPage = '';
    private $contentPages = array();
    private $CI = NULL;
    private $layout = NULL;

    public function __construct($masterPage='') {
        $this->CI = get_instance();
        if (!empty($masterPage)) {
            $this->setMasterPage($masterPage);
        }
    }

    public function setMasterPage($masterPage) {
        if (!file_exists(APPPATH . 'views/' . $masterPage . EXT)) {
            throw new Exception(APPPATH . 'views/' . $masterPage . EXT);
        }
        $this->masterPage = $masterPage;
    }

    public function setLayout($layout='') {
        $this->layout = $layout;
    }

    public function getMasterPage() {
        return $this->masterPage;
    }

    public function addContent($file, $tag, $content = array()) {
        $this->contentPages[$tag] = $this->CI->load->view($file, $content, true);
    }

    public function show($miarray = array()) {
        $miarray['content'] = $this->layout;
        return $this->CI->load->view($this->masterPage, $miarray);
    }

}
