<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends MY_Controller {
    public $FullName;
    public $CivilStatus;
    public $BirthDate;
    public $Sex;
    public $Position;
    public $HighestEducation;
	public $PerformanceRating;
	public $EmployeeID;
	public $LearningArea;
	public $District;
	public $School; 	
	public $Remarks;
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
       redirect('Employee/Profile');
		// $this->load->view('welcome_message');
    }
    public function Profile($EmployeeID=null)
	{
		$this->EmployeeID=$EmployeeID;
        $this->GetEmployeeInformation();
		$data=[];
        $data['css_libs']=[];
        $data['modals']=['main/Profile-edit','main/transferschool'];
		$data['js_libs']=[];
		$data['title']='Admin - Page';
		$data['body']='main/Profile';
		$this->load->view('template/layout',$data);
        
	}
	public function GetEmployeeInformation(){
		$this->load->database();
		$data=$this->db->query('SELECT *,CONCAT(LastName,",",FirstName," ",MiddleName) as FullName FROM tbl_employees WHERE employeeID=?',array($this->EmployeeID))->row_array();
        $this->FullName=$data['FullName'];
        $this->CivilStatus='Single';
        $this->BirthDate=$data['birthdate'];
        $this->Sex=$data['sex'];
		$this->Position='Teacher I';
		$this->LearningArea='Elementary';
		$this->District='D';
        $this->HighestEducation=$data['HighestEducation'];
        $this->PerformanceRating=$this->db->query('SELECT * FROM tbl_ratings',array($this->EmployeeID))->result_array();
	}
	public function GetEmployeePerformanceRatings(){
		$this->load->database();
		$form_data=json_decode($this->input->post('data'),true);
        $data=$this->db->query('SELECT year,rating,ratingID
		FROM tbl_ratings WHERE employeeID=?',array($form_data['EmployeeID']))->result_array();
        echo json_encode($data);
	}
	public function AddPerformanceRating(){
        $this->load->database();
        $form_data=json_decode($this->input->post('data'),true);
        $this->db->insert('tbl_ratings',$form_data);
        echo json_encode('success');
    }
    public function DeletePerformanceRating(){
        $this->load->database();
        $form_data=json_decode($this->input->post('data'),true);
        $this->db->query('DELETE FROM tbl_ratings WHERE ratingID=?',array($form_data['PerformanceRatingID']));
        echo json_encode('success');
    }
}
