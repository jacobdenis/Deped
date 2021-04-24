<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		$this->load->view('main/signin');
    }
    public function signin(){
        $form_data=$this->input->post();
        if($form_data['username']=='school' && $form_data['password']=='school'){
            redirect('School/');
        }
        if($form_data['username']=='employee' && $form_data['password']=='employee'){
            redirect('Employee/');
        }
        if($form_data['username']=='admin' && $form_data['password']=='admin'){
            redirect('Admin/');
        }
    }
}
