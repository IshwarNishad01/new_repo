<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{


	//  *****************************************
	// for show fronted pages
	//  *****************************************


	public function index()
	{
		$data['addnotification'] = $this->db->get("notification")->result();
		$data['video'] = $this->db->get("videos", 3)->result();
		$this->load->view('elearning/index', $data);
	}

	public function about()
	{
		$this->load->view('elearning/about');
	}
	public function course()
	{
		$data['addnotification'] = $this->db->get("notification")->result();
		$data['video'] = $this->db->get("videos", 3)->result();
		$this->load->view('elearning/course', $data);
	}
	public function video()
	{
		$data['video'] = $this->db->get("videos")->result();
		$this->load->view('elearning/video', $data);
	}
	public function t_gallery()
	{
		$this->load->view('elearning/gallery');
	}

	public function team()
	{
		$this->load->view('elearning/team');
	}
	public function service()
	{
		$this->load->view('elearning/service');
	}
	public function payment()
	{
		$this->load->view('elearning/payment');
	}
	public function testimonial()
	{
		$this->load->view('elearning/testimonial');
	}


	// submit contact page form data
	public function contactus()
	{

		$this->load->view('elearning/contact');

		if (isset($_POST['submit'])) {
			$data = array(
				"name" => $this->input->post("name"),
				"email" => $this->input->post("email"),
				"subject" => $this->input->post("subject"),
				"message" => $this->input->post("message")
			);
			$check = $this->ExamModel->contact_info($data);

			if ($check ==  true) {
				$this->session->set_tempdata('show_success', 'Successfully Form Submitted ', 3);
				redirect(base_url('contact'), 'refrsh');
			} else {
				$this->session->set_tempdata('show_error', 'Error in Form Submitting', 3);
				redirect(base_url('contact'), 'refresh');
			}
			$this->load->view('elearning/contact');
		}
	}


	// submit home page contact form
	public function contactdata()
	{
		$data = array(
			"name" => $this->input->post("name"),
			"email" => $this->input->post("email"),
			"subject" => $this->input->post("subject"),
			"message" => $this->input->post("message")
		);
		$response = $this->ExamModel->contact_info($data);

		if ($response ==  true) {
			$this->session->set_tempdata('show_success', 'Successfully Form Submitted', 3);
			redirect(base_url('/'), 'refrsh');
		} else {
			$this->session->set_tempdata('show_error', 'Error in Form Submitting', 3);
			redirect(base_url('/'), 'refresh');
		}
	}


	public function result_list()
	{
		$id = $this->session->userdata('userid');
		$data['shaw'] = $this->db->where('student_id', $id)->get('results')->result();
		// print_r($data);
		$this->load->view('elearning/result_list', $data);
	}


	public function regist_store()
	{
		$data = array(
			"first_name" => $this->input->post("first_name"),
			"last_name" => $this->input->post("last_name"),
			"dob" => $this->input->post("dob"),
			"group" => $this->input->post("group"),
			"identity" => $this->input->post("identity"),
			"yournumber" => $this->input->post("yournumber"),
			"email" => $this->input->post("email"),
			"password" => $this->input->post("password"),
			"qualification" => $this->input->post("qualification"),
			"course" => $this->input->post("course"),
			"temp_address" => $this->input->post("temp_address"),
			"par_address" => $this->input->post("par_address")
		);
		$check = $this->ExamModel->regist_type($data);
		if ($check > 0) {

			// $this->session->set_flashdata('Success', 'Successfull added');
			$this->load->view("elearning/registration");
		} else {
			// return redirect("regist?error");
			// $this->session->set_flashdata("Error", "Unsuccessfull added");
			$this->load->view("elearning/registration");
		}
	}


	//  user registration

	public function regist()
	{
		$this->load->view('elearning/registration');
	}


	// user login
	public function login()
	{
		$this->load->view('elearning/login');
	}

	// check user login details 

	public function login_check()
	{

		if (isset($_POST['submit'])) {

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			// check user email is register or not
			$isEmailRegistered = $this->db->query("select * from register where email = '$email'")->result();
			if (count($isEmailRegistered) > 0) {

				// check password is correct or not
				$checkPassword = $this->db->query("select * from register where email = '$email' and password = '$password'")->result();

				if (count($checkPassword) > 0) {
					$this->session->set_userdata('first_name', $checkPassword[0]->first_name);
					$this->session->set_userdata('last_name', $checkPassword[0]->last_name);
					$this->session->set_userdata('userid', $checkPassword[0]->id);
					$this->session->set_userdata('password', $checkPassword[0]->password);
					redirect(base_url('dashboard'), 'refresh');
				} else {
					// echo 'please enter correct password';
					$this->session->set_tempdata('error', 'Please Enter Correct Password', 3);
					redirect(base_url('login'), 'refresh');
				}
			} else {
				// echo 'please register yourself then login';
				$this->session->set_tempdata('error', 'Please Register Yourself First', 3);
				redirect(base_url('login'), 'refresh');
			}
		}
	}


	public function registration_user()
	{

		$data = array(
			"first_name" => $this->input->post("first_name"),
			"last_name" => $this->input->post("last_name"),
			"email" => $this->input->post("email"),
			"password" => $this->input->post("password")
		);
		$check = $this->ExamModel->regist_type($data);
		if ($check > 0) {
			$this->session->set_tempdata('success', 'Successfully Registration... You can login now', 5);
			redirect(base_url('registration'), 'refresh');
		} else {
			$this->session->set_tempdata("error", "Successfully Registration", 5);
			redirect(base_url('registration'), 'refresh');
		}
	}

	public function registration_user2()
	{
		$data = array(
			"first_name" => $this->input->post("first_name"),
			"last_name" => $this->input->post("last_name"),
			"dob" => $this->input->post("dob"),
			"group" => $this->input->post("group"),
			"identity" => $this->input->post("identity"),
			"yournumber" => $this->input->post("yournumber"),
			"email" => $this->input->post("email"),
			"password" => $this->input->post("password"),
			"qualification" => $this->input->post("qualification"),
			"course" => $this->input->post("course"),
			"temp_address" => $this->input->post("temp_address"),
			"par_address" => $this->input->post("par_address")
		);
		$check = $this->ExamModel->regist_type($data);
		if ($check > 0) {
			$this->session->set_tempdata('success', 'Successfully Registration... Now You can login now', 5);
			redirect(base_url('registration'), 'refresh');
		} else {
			$this->session->set_tempdata("error", "Successfully Registration", 5);
			redirect(base_url('registration'), 'refresh');
		}
	}


	public function enquiry()
	{
		$this->load->view('elearning/enquiry');


		if (isset($_POST['submit'])) {
			$data = array(
				"name" => $this->input->post("name"),
				"email" => $this->input->post("email"),
				"number" => $this->input->post("number"),
				"subject" => $this->input->post("subject"),
				"message" => $this->input->post("message")
			);
			$check = $this->ExamModel->insert_enqiry($data);

			if ($check ==  true) {
				$this->session->set_tempdata('show_success', 'Successfully Form Submitted', 3);
				redirect(base_url('enquiry'), 'refrsh');
			} else {
				$this->session->set_tempdata('show_error', 'Error in Form Submitting', 3);
				redirect(base_url('enquiry'), 'refresh');
			}
		}
	}


	// user dashboard and typing test 


	public function dash_login()
	{

		if (empty($this->session->userdata('userid'))) {
			$this->session->set_tempdata('show_login_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('login'));
		}

		$this->load->view('elearning/dashboard');
	}


	public function user_logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}


	public function paper_info()
	{
		if (empty($this->session->userdata('userid'))) {
			$this->session->set_tempdata('show_login_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('login'));
		}
		$data['show'] = $this->db->query('select * from paper where status = "active"')->result();
		$this->load->view('elearning/paper_info', $data);
	}
	public function paper_view()
	{
		if (empty($this->session->userdata('userid'))) {
			$this->session->set_tempdata('show_login_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('login'));
		}
		$id = $this->input->get('id');
		$data['show'] = $this->db->query("select * from paper where id = $id")->result();
		$this->load->view('elearning/paper_view', $data);
	}


	// show typing test message in question paper
	public function show_question_paper()
	{
		$id = $this->input->get('id');
		$data['paper'] = $this->db->query("select * from paper where id = $id")->result();
		$this->load->view('elearning/question_paper', $data);
	}


	// submit student test result

	public function insertRecord()
	{

		$data = array(

			'student_id' => $this->session->userdata('userid'),
			'total_words' => $this->input->post('inputTotalWord'),
			'type_word' => $this->input->post('inputTotalTypeWord'),
			'errors' => $this->input->post('inputTotalError'),
			'exam_id' => $this->input->post('exam_id'),
		);

		$response = $this->ExamModel->insert_result($data);

		echo json_encode(array('success' => true));
	}
}
