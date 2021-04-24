<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

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
		$data=[];
		$data['css_libs']=[];
		$data['js_libs']=[];
		$data['title']='Admin - Page';
		$data['body']='main/Admin';
		$this->load->view('template/layout',$data);
        
	}
    public function Users()
	{
		$this->RoleType='Admin';
		$data=[];
		$data['css_libs']=[];
		$data['js_libs']=[];
		$data['title']='Admin - Page';
		$data['body']='main/Users';
		$this->load->view('template/layout',$data);
        
	}
    public function SchoolEmployees()
	{
		$this->RoleType='Admin';
		$data=[];
		$data['css_libs']=[];
		$data['js_libs']=['assets/custom/Admin.js'];
		$data['modals']=['main/Profile-edit','main/Profile-add','main/PerformanceRating'];
		$data['title']='Admin - Page';
		$data['body']='main/SchoolEmployees';
		$this->load->view('template/layout',$data);
        
	}
    public function DivisionEmployees()
	{
		$this->RoleType='Admin';
		$data=[];
		$data['css_libs']=[];
		$data['modals']=['main/Profile-edit'];
		$data['js_libs']=[];
		$data['title']='Admin - Page';
		$data['body']='main/DivisionEmployees';
		$this->load->view('template/layout',$data);
        
	}
   
}
