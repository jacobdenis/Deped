<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends Ci_Controller {
    public $RoleType;
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
    public function __construct(){
        parent::__construct();  
    }
	public function index()
	{
		$this->load->view('main/signin');
    }
    public function signin(){
        $form_data=$this->input->post();
        print_r($form_data);
        if($form_data['username']=='jacob' && $form_data['password']=='jacob'){
            redirect('index.php/');
        }
    }
}
