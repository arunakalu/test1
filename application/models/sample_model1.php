<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class hotdeal_details_mod extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database("sqlc_sel");
    }
    
    
    
    
}