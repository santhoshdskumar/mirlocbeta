<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['middel_body'] = 'main/index';
			$this->load->view('templates',$data);
	}

  public function contact()
	{
		$data['middel_body'] = 'main/contactus';
			$this->load->view('templates',$data);
	}

  public function projects()
	{
		$data['middel_body'] = 'main/projects';
			$this->load->view('templates',$data);
	}

  public function projects_details()
	{
		$data['middel_body'] = 'main/project_detail';
			$this->load->view('templates',$data);
	}


}