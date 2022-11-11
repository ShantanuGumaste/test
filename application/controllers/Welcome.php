<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function shantanu(){
		echo "hi";
	}

	public function user(){
		$data['users'] = $this->CrudModel->get_data("user");
		// print_r($users);
		$this->load->view("User_add", $data);
	}

	public function add_user_data(){

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		 
		$insert_array = array(
			"name" => $name,
			"email" => $email,
			"mobile" => $phone,
		);

		$result = $this->CrudModel->insert_data("user", $insert_array);
		if ($result == true) {
			echo "<script>
			alert('Successfully Added');
			document.location='".base_url()."';
			</script>";
			
		} else {
			echo "Error";
		}
		
	}
	public function add_student_data(){

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$student_div = $this->input->post('student_div');
		
		$insert_array = array(
			"name" => $name,
			"email" => $email,
			"mobile" => $phone,
			"student_div" => $student_div,
		);
		$this->CrudModel->insert_data("students", $insert_array);
	}
}
