<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Backend
{
    public function index()
    {
        $this->masterpage->setLayout('admin/dashboard/index');
        $this->masterpage->show();
    }
}
