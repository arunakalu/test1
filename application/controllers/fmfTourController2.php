<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class FmfTourController2 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        //  $this->load->helper('basicMethod');
        // $this->load->library('session');
    }

    public function getCustomerDetails() {
        
       // echo 'hello getCustomerDetails';
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $contactNo = $_POST['contactNo'];
        
        
        echo $firstName.$lastName.$email.$contactNo;
    }

    public function sendEmails() {
        echo 'hello sendEmails';
    }

    public function index() {
        echo 'njbherbgheb';
        $this->load->view('popupModelView');
    }

}
