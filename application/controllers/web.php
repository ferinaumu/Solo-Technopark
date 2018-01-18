<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  /**
   *
   */
  class Web extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();

  		$this->load->model('WebModel');
    }

    function index()
    {
      $this->load->view('web/index');
    }

    public function profil()
    {
      $this->load->view('web/profil');
    }

    public function program(){
      $this->load->view('');
    }

    public function berita()
    {
      $this->load->view('');
    }

    public function ssc()
    {
      $this->load>view('');
    }

    public function diklat($id)
    {
      $this->load->view('');
    }

    public function inkub($id)
    {
      if ($id == 1) {
        $this->load->view('');
      }elseif($id == 2){
        $this->load->view('');
      }
    }

    public function kontak()
    {
      $this->load->view('');
    }
  }

?>
