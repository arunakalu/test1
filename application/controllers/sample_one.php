<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class sample_one extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index() {

        $this->load->view('sample_view');
    }

    public function getDataFromView() {

        $userName = $this->input->post('txt1');
        $userAddress = $this->input->post('txt2');
        echo $userName;
        echo $userAddress;
    }

    public function new_url() {


        $config['base_url'] = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
        
        var_dump($config);
        
        $strval=$config['base_url']."/school.com";
        echo '<br>';
        var_dump($strval);
       var_dump(define('ROOTPATH', realpath(dirname(__FILE__)) . '/'));
        

        if (realpath(dirname(__FILE__)) == $_SERVER['DOCUMENT_ROOT']) {
            define('ROOT', '/');
        } else {
            define('ROOT', substr(ROOTPATH, strlen($_SERVER['DOCUMENT_ROOT']) + 1));
        }
    }

}
