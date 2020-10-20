<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Menu_Alumni','MA');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function reg_menu(){
		$data = array(
			'Name_LastName' => $this->input->post("Name_LastName"),
			'ID_Card' => $this->input->post("ID_Card"),
			'Date_Of_Birth'=> $this->input->post("Date_Of_Birth"),
			'Sex'=> $this->input->post("Sex"),
			'Address'=> $this->input->post("Address"),
			'Tel'=> $this->input->post("Tel"),
			'E_mail'=> $this->input->post("E_mail"),
			'Facebook'=> $this->input->post("Facebook"),
			'Instagram'=> $this->input->post("Instagram"),
		);

		$data1 = array(	
			'Std_ID'=> $this->input->post("Std_ID"),
			'FName_LName'=> $this->input->post("FName_LName"),
			'End_Year'=> $this->input->post("End_Year"),
		);

		$data2 = array(
			'id_card'=> $this->input->post("id_card"),
			'Company_Name'=> $this->input->post("Company_Name"),
			'Company_Address'=> $this->input->post("Company_Address"),
			'Profession'=> $this->input->post("Profession"),
			'Rank'=> $this->input->post("Rank"),
			'Company_Tel'=> $this->input->post("Company_Tel"),
		);

		$data3 = array(
			'Username'=> $this->input->post("Username"),
			'Password'=> $this->input->post("Password"),
			'Re_Password'=> $this->input->post("Re_Password"),
		);

		if($this->input->post("Name_LastName")!= "" && $this->input->post("Std_ID")!== ""){
			$this->MA->insert_Register($data);
			$this->MA->insert_Educational($data1);
			$this->MA->insert_Work($data2);
			$this->MA->insert_Login($data3);
			$this->load->view('view_insert_successwithmenulink');
		}else {
			echo "ไม่สามารถเพิ่มข้อมูลได้ค่ะ !";
		}
	}
	public function showPrivate()
	{
		$result['MA'] = $this->MA->get_Private();  
		$this->load->view('view_Test',$result);
	}
	public function showEducational()
	{
		$result['MA'] = $this->MA->get_Educational();
		$this->load->view('view_menu',$result);
	}
	public function showWork()
	{
		$result['MA'] = $this->MA->get_Work();
		$this->load->view('view_menu',$result);
	}
	public function showStdID()
	{
		$result['MA'] = $this->MA->Search_Std_ID();
		$this->load->view('View_STD_ID',$result);
	}
	
}
