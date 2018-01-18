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

    public function home()
    {
      $this->load->view('web/home');
    }

    public function profil()
    {
      $this->load->view('web/profil');
    }

    public function program(){
      $this->load->view('web/program');
    }

    public function berita()
    {
      $this->load->view('web/berita');
    }

    public function ssc()
    {
      $this->load>view('web/ssc');
    }

    public function diklat()
    {
      $this->load->view('');
    }

    public function inkub()
    {
      if ($id == 1) {
        $this->load->view('');
      }elseif($id == 2){
        $this->load->view('');
      }
    }

    public function kontak()
    {
      $this->load->view('web/kontak');
    }
  }

?>
