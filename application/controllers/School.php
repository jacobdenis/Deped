<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends MY_Controller {
    public $FullName;
    public $CivilStatus;
    public $BirthDate;
    public $Sex;
    public $Position;
    public $HighestEducation;
    public $PerformanceRating;
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
        echo 'Your in the wrong page';
		// $this->load->view('welcome_message');
    }
    public function SchoolEmployees()
	{
        $this->RoleType='SchoolEmployee';
        $this->FullName='Jacob Denis';
        $this->CivilStatus='Single';
        $this->BirthDate='01-13-1995';
        $this->Sex='Male';
        $this->Position='Teacher I';
        $this->HighestEducation='BSIT';
        $this->PerformanceRating='96';
        
		$data=[];
        $data['css_libs']=[];
        $data['modals']=['main/Profile-edit','main/transferschool','main/Profile-add','main/PerformanceRating'];
		$data['js_libs']=['assets/custom/Admin.js'];
		$data['title']='Info System';
		$data['body']='main/SchoolEmployees';
		$this->load->view('template/layout',$data);
        
    }
  
    public function AddEmployee(){
        $this->load->database();
        $form_data=json_decode($this->input->post('data'),true);
        $form_data['restrictionID']=1;
        $this->db->insert('tbl_employees',$form_data);
    }
    public function GetEmployees(){
        $this->load->database();
        $data=$this->db->query('SELECT *,CONCAT(LastName,",",FirstName," ",MiddleName) as FullName FROM tbl_employees WHERE restrictionID=1')->result_array();
        echo json_encode($data);
    }


    
}
