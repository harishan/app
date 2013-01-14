<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	public function index()
	{
		$this->load->view('login/login');
	}
	
	public function perform_login() {
		echo "logging in";			
		
	}	
	
	public function 	register() {
		$this->load->view('login/register');
	}
	
	public function regPageSelect() {
		if ($this->input->post('options') == 'faculty') {
			$this->load->view('login/registerFaculty');			
		} else {
			$this->load->view('login/registerStudent');
		}				
	}
	
	public function performFacultyRegistration() {
		$this->load->model('register');
		if($this->register->save_faculty_data()) {
			echo "faculty data saved";
		}
	}
	
	public function performStudentRegistration() {
		$this->load->model('register');
		if($this->register->save_student_data()) {
			echo "student data saved";
		}
	}	
		
}