<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index
 *
 * @author EL HAZARD
 */
class index extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    function index(){
        $data['nama'] = 'jamal dan ahmad ';
        $data['namanya'] = array('saya','kamu');
        $this->load->view('tampil1',$data);
    }
    function panggil($id){
        echo 'hai '.$id;
    }
}
