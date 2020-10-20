<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Menu_Alumni extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        function insert_Register($data){
			$this->db->insert('register',$data);
        }
        function insert_Educational($data1){
            $this->db->insert('data_educational',$data1);
        }
        function insert_Work($data2){
            $this->db->insert('data_work',$data2);
        }
        function insert_Login($data3){
            $this->db->insert('login',$data3);
        }
        function get_Private(){
			$this->db->select('Name_LastName,ID_Card,Date_Of_Birth,Sex,Address,Tel,E_mail,Facebook,Instagram');
			$result = $this->db->get('register');     
			return $result;
        }
        function get_Educational(){
			$this->db->select('Std_ID,FName_LName,End_Year');
			$result = $this->db->get('data_educational');     
			return $result;
        }
        function get_Work(){
			$this->db->select('id_card,Company_Name,Company_Address,Profession,Rank,Company_Tel');
			$result = $this->db->get('data_work');     
			return $result;
        }
        
        function Search_Std_ID($result){
            $this->db->where('Std_ID');
            $result = $this->db->get('data_educational');
            
        }
        function Search_Name(){
            $this->db->select('Name_LastName');
            $result = $this->db->get('');
        }
        function Search_Year(){
            $this->db->select('End_Year');
            $result = $this->db->get('');
        }
}