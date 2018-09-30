<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	 function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
		$this->load->library('session'); 
        $this->load->database();
           
	}
	public function index()
	{
		$this->load->view('site/main_header');
		$this->load->view('admin/login');
		$this->load->view('site/footer');
	}
	public function registration()
	{
		$this->load->view('site/main_header');
		$this->load->view('admin/registration');
		$this->load->view('site/footer');
	}
	public function dashboard()
	{
		$this->load->view('site/header');
		$this->load->view('admin/dashboard');
		$this->load->view('site/footer');
	}
}

