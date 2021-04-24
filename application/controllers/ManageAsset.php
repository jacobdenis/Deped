<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageAsset extends CI_Controller {

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
		$data['title']='Asset Mgmt';
		$data['body']='welcome_message';
		$this->load->view('template/layout',$data);
        
	}
	public function systemunits(){
		$data=[];
		$data['css_libs']=[];
		$data['js_libs']=['assets/custom/assets.js'];
		$data['title']='Asset Mgmt';
		$data['body']='main/SystemUnits';
		$this->load->view('template/layout',$data);
	}
	public function monitors(){
		$data=[];
		$data['css_libs']=[];
		$data['js_libs']=['assets/custom/assets.js'];
		$data['title']='Asset Mgmt';
		$data['body']='main/Monitors';
		$this->load->view('template/layout',$data);
	}
	public function stockroom(){
		$data=[];
		$data['css_libs']=[];
		$data['js_libs']=['assets/custom/assets.js'];
		$data['title']='Asset Mgmt';
		$data['body']='main/StockRoom';
		$this->load->view('template/layout',$data);
	}
}
