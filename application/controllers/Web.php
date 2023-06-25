<?php
<<<<<<< HEAD
defined('BASEPATH') or exit('no direct script access allowed');

class Web extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = "Halaman Depan";
		$this->load->view('v_header', $data);
		$this->load->view('v_index', $data);
		$this->load->view('v_footer', $data);
	}

	public function about()
	{
		$data['judul'] = "Halaman About";
		$this->load->view('v_header', $data);
		$this->load->view('v_about', $data);
		$this->load->view('v_footer', $data);
	}
=======
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{

    function __construct(){
    parent::__construct();
    $this->load->helper('url');
    }

 public function about(){
    $data['judul'] = "Halaman About";
    $this->load->view('v_header',$data);
    $this->load->view('v_about',$data);
    $this->load->view('v_footer',$data);
    }
>>>>>>> c44c7015047e80ae4f39d5f2ea2fdda378b2492a
}
