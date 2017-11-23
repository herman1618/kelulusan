<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('m_validate');
    $this->m_validate->validate_session();
  }

  function index()
  {
    echo "cannot get any parameter";
  }

  function kelulusan()
  {
    
  }

}
