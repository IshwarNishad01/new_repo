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
			if ($check > 0) {
				$this->session->set_flashdata('success', 'Successfully Form Submitted ');
			} else {
				$this->session->set_flashdata('error', 'Error in Form Submitting');
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
		$check = $this->ExamModel->contact_info($data);
		if ($check > 0) {
			$this->session->set_flashdata('success', 'Successfully Form Submitted');
			return $this->index();
		} else {
			$this->session->set_flashdata('error', 'Error in Form Submitting');
			return $this->index();
		}
	}


	public function result_list()
	{
		$data['shaw'] = $this->db->get("results")->result();
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

			$this->session->set_flashdata('Success', 'Successfull added');
			$this->load->view("elearning/registration");
		} else {
			// return redirect("regist?error");
			$this->session->set_flashdata("Error", "Unsuccessfull added");
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
					$this->load->view('elearning/dashboard');
				} else {
					// echo 'please enter correct password';
					$this->session->set_flashdata('error', 'Please Enter Correct Password');
					$this->load->view('elearning/login');
				}
			} else {
				// echo 'please register yourself then login';
				$this->session->set_flashdata('error', 'Please Register Yourself First');
				$this->load->view('elearning/login');
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
			$this->session->set_flashdata('success', 'Successfull added');
			$this->load->view("elearning/registration");
			// $this->session->unset_userdata('success');
		} else {
			$this->session->set_flashdata("error", "Unsuccessfull added");
			$this->load->view("elearning/registration");
			// $this->session->unset_userdata('success');
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
			$this->session->set_flashdata('Success', 'Successfull added');
			$this->load->view("elearning/registration");
		} else {
			$this->session->set_flashdata("Error", "Unsuccessfull added");
			$this->load->view("elearning/registration");
		}
	}



	public function dash_login()
	{
		$this->load->view('elearning/dashboard');
	}

	public function enquiry()
	{
		$this->load->view('elearning/enquiry');
	}

	public function paper_info()
	{
		$data['show'] = $this->db->query('select * from paper where status = "active"')->result();
		$this->load->view('elearning/paper_info', $data);
	}
	public function paper_view()
	{
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


	// submit student typing result data
	public function submit_exam()
	{
		echo 'successfully submitted';
	}
}
