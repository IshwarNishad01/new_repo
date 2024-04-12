<?php

class AdminController extends CI_Controller
{

	public function index()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}
		$this->load->view('admin/index');
	}

	public function payment()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}
		$data['payment'] = $this->db->get("registration")->result();
		$this->load->view('admin/payment',$data);
       
	}

	public function active_payment($id)
	{
		$data = $this->db->get_where('registration',array('id'=>$id))->row_array();
		print_r($data);
		if($data['status']==1)
		{
			$this->db->set('status','0');
			$this->db->where('id', $id);
			$result = $this->db->update('registration');
			if ($result==1) {
				$this->session->set_tempdata("active_payment", "Successfully Deactive Payment...", 5);
			} else {
				$this->session->set_tempdata("error_status", "Failed in Active Payment...", 5);
			}
			return redirect(base_url().'admin/payment');
		}
		if($data['status']==0)
		{
			$this->db->set('status','1');
			$this->db->where('id',$id);
			$result = $this->db->update('registration');
			if ($result==1) {
				$this->session->set_tempdata("active_payment", "Successfully Active Payment...", 5);
			} else {
				$this->session->set_tempdata("error_status", "Failed in Deactive Payment...", 5);
			}
			return redirect(base_url().'admin/payment');
		}
	}
	
	

	public function add_achiever()
	{
		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
		$user_file_name = $_FILES['image']['name'];
		$config['upload_path']          = 'assets/admin_assets/uploads/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$destination="assets/admin_assets/uploads/".$user_file_name;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        echo $error['error'];
                }
                else
                {
			
			$data = array(
				
				'name' => $this->input->post('name'),
				'designation' => $this->input->post('designation'),
				'batch' => $this->input->post('batch'),
				'image' => $user_file_name
			);
			$this->db->insert('achiever_image', $data);

			$last_id = $this->db->insert_id();
			if ($last_id > 0) {
				$this->session->set_tempdata("success_image", "Successfully Achiever Image Added...", 5);
			} else {
				$this->session->set_tempdata("error_image", "Error in Achiever Image Uploading...", 5);
			}
		}
		
	}
	$this->load->view('admin/add_achiever');
	}

	public function all_achiever()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}
		$this->db->order_by('id', 'desc');
		$data['image'] = $this->db->get("achiever_image")->result();
		$this->load->view('admin/all_achiever', $data);
	}

	public function delete_achiever()
	{
		$id = $this->input->get('id');
		$check = $this->ExamModel->image_delete($id);
		if ($check > 0) {
			$this->session->set_tempdata("delete_image", "Successfully Image Deleted...", 5);
			return redirect(base_url('admin/all_achiever'));
		} else {
			$this->session->set_tempdata("del_error_image", "Error in Image Deleted...", 5);
			return redirect(base_url('admin/all_achiever'));
		}
	}

	public function add_photo()
	{
		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
		$user_file_name = $_FILES['image']['name'];
		$config['upload_path']          = 'assets/admin_assets/uploads/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$destination="assets/admin_assets/uploads/".$user_file_name;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        echo $error['error'];
                }
                else
                {
			
			$data = array(
				'image' => $user_file_name
			);
			$this->db->insert('gallery', $data);

			$last_id = $this->db->insert_id();
			if ($last_id > 0) {
				$this->session->set_tempdata("success_photo", "Successfully Photo Added...", 5);
			} else {
				$this->session->set_tempdata("error_photo", "Error in Photo Uploading...", 5);
			}
		}
		
	}
	$this->load->view('admin/add_photo');
	}

	public function all_photo()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}
		$this->db->order_by('id', 'desc');
		$data['image'] = $this->db->get("gallery")->result();
		$this->load->view('admin/all_photo', $data);
	}
	public function delete_photo()
	{
		$id = $this->input->get('id');
		$check = $this->ExamModel->photo_delete($id);
		if ($check > 0) {
			$this->session->set_tempdata("delete_photo", "Successfully Photo Deleted...", 5);
			return redirect(base_url('admin/all_photo'));
		} else {
			$this->session->set_tempdata("del_error_photo", "Error in Photo Deleted...", 5);
			return redirect(base_url('admin/all_photo'));
		}
	}

	public function add_videos()
	{


		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$caption = $this->input->post('caption');
			$video = $this->input->post('video');
			$userfile = $this->input->post('userfile');

			$data = array(
			'caption' => $caption, 
			'video' => $video,
			'userfile' => $userfile

		);
			$this->db->insert('videos', $data);
			$last_id = $this->db->insert_id();
			if ($last_id > 0) {
				$this->session->set_tempdata("success_video", "Successfully Video Added...", 5);
			} else {
				$this->session->set_tempdata("error_video", "Error in Video Uploading...", 5);
			}
		}
		$this->load->view('admin/add_videos');
	}


	public function add_slider()
	{
		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
		$user_file_name = $_FILES['image']['name'];
		$config['upload_path']          = 'assets/admin_assets/uploads/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$destination="assets/admin_assets/uploads/".$user_file_name;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        echo $error['error'];
                }
                else
                {
			
			$data = array(
				'image' => $user_file_name
			);
			$this->db->insert('slider', $data);

			$last_id = $this->db->insert_id();
			if ($last_id > 0) {
				$this->session->set_tempdata("success_slider", "Successfully Slider Image Added...", 5);
			} else {
				$this->session->set_tempdata("error_photo", "Error in Slider Image Uploading...", 5);
			}
		}
		
	}
	$this->load->view('admin/add_slider');
	}

	public function all_slider()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}
		$this->db->order_by('id', 'desc');
		$data['image'] = $this->db->get("slider")->result();
		$this->load->view('admin/all_slider', $data);
	}

	public function delete_slider()
	{
		$id = $this->input->get('id');
		$check = $this->ExamModel->slider_delete($id);
		if ($check > 0) {
			$this->session->set_tempdata("delete_slider", "Successfully Slider Image Deleted...", 5);
			return redirect(base_url('admin/all_slider'));
		} else {
			$this->session->set_tempdata("del_error_slider", "Error in Slider Image Deleted...", 5);
			return redirect(base_url('admin/all_slider'));
		}
	}


	public function get_exams()
	{
		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}


		$course_id = $this->input->post('course_id');
		$exams = $this->ExamModel->get_exams_by_course($course_id);
		echo json_encode($exams);
	}


	public function gallery_delete()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}

		$id = $this->input->get('q');
		$this->db->where("gid=", $id);
		$this->db->delete("gallery");
		//redirect("AdminController/event_delete");
		redirect("All_P");
	}


	public function student_registration()
	{
		$data['show'] = $this->db->get("registration")->result();
		$this->load->view('admin/student_registration', $data);
	}

	public function delete_regist($id)
	{
		$this->db->where("id", $id);
		$check = $this->db->delete('registration');
		if ($check) {
			return redirect("student_registration?success&id=$check");
		} else {
			return redirect("student_registration?error");
		}
	}


	public function all_videos()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}
		$this->db->order_by('id', 'desc');
		$data['show'] = $this->db->get("videos")->result();
		$this->load->view('admin/all_video', $data);
	}

	public function delete_video()
	{
		$id = $this->input->get('id');
		$check = $this->ExamModel->video_delete($id);
		if ($check > 0) {
			$this->session->set_tempdata("delete_video", "Successfully Video Deleted...", 5);
			return redirect(base_url('admin/all_video'));
		} else {
			$this->session->set_tempdata("del_error_video", "Error in Video Deleted...", 5);
			return redirect(base_url('admin/all_video'));
		}
	}




	public function ad_form_list()
	{
		$data['show'] = $this->db->get("admission_form")->result();
		$this->load->view('admin/admission_formlist', $data);
	}
	public function all_msg()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}

		$data['show'] = $this->db->get("contact")->result();
		$this->load->view('admin/all_msg', $data);
	}

	public function event_add()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$event_title = $this->input->post('event_title');
			$event_highlight = $this->input->post('event_hlt');

			$event_details = $this->input->post('dtls');
			$myTemp = $_FILES['file_event']['tmp_name'];
			$myfile = $_FILES['file_event']['name'];
			//echo $myfile;

			$config['upload_path']   = './asset/upload_img/';
			$config['allowed_types'] = 'jpeg|jpg|png';


			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('file_event')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$d = $this->upload->data();
				$data = array('event_title' => $event_title, 'event_highlight' => $event_highlight, 'event_file' => $myfile, 'event_details' => $event_details);
				$this->db->insert("event", $data)->result();
				$last_id = $this->db->insert_id();
				if ($last_id > 0) {
					redirect("../EA?add_event");
				}
			}
		}
		$this->load->view('admin/add_event');
	}
	public function show_events()
	{
		$data['show'] = $this->db->get("notice")->result();
		$this->load->view('admin/all_event', $data);
	}

	public function view_exams()
	{

		$q = $this->input->get('q');
		$data['show'] = $this->db->query("select DISTINCT exam.exam_id,exam_name from stu_result join exam on stu_result.exam_id=exam.exam_id where course = $q ")->result();
		$this->load->view('admin/view_exams', $data);
	}


	public function view_exam_result()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}

		$q = $this->input->get('q');
		// echo $q;

		$data['show'] = $this->db->query("select * from stu_result join exam on stu_result.exam_id=exam.exam_id where exam.exam_id = $q")->result();

		$this->load->view('admin/student_result_list', $data);
	}

	public function add_typing_result()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}

		$data['result'] = $this->db->query('select DISTINCT student_id , registration.first_name from results JOIN registration ON results.student_id = registration.id')->result();
		$this->load->view('admin/add_typing_result', $data);
		// print_r($data);
	}
	public function typing_result_list()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}

		$student_id = $this->input->get('id');
		$data['list'] = $this->db->query("select * from results join paper on paper.id = results.exam_id where student_id='$student_id' ")->result();
		$this->load->view('admin/typing_result_list', $data);
	}




	public function add_paper()
	{
		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}

		$data['show'] = $this->ExamModel->insert_paper();
		$this->load->view('admin/add_paper', $data);
	}
	public function paper_data()
	{
		$data = array(
			"p_name" => $this->input->post("p_name"),
			"duration" => $this->input->post("duration"),
			"e_date" => $this->input->post("e_date"),
			"status" => $this->input->post("status"),
			"language" => $this->input->post("language"),
			"message" => $this->input->post("message")
		);
		$check = $this->ExamModel->paperdata($data);
		if ($check > 0) {
			$this->session->set_tempdata("add_paper", "Successfully Paper Added...", 5);
			return redirect(base_url('admin/add_paper'));
		} else {
			$this->session->set_tempdata("notadd_paper", "Error in Added Paper...", 5);
			return redirect(base_url('admin/add_paper'));
		}
	}



	public function paper_list()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}
		$this->db->order_by('id', 'desc');
		$data['papers'] = $this->db->get("paper")->result();
		$this->load->view('admin/all_paper', $data);
	}

	public function show_all_student()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}

		$data['show'] = $this->db->get("registration")->result();
		$this->load->view('admin/all_students', $data);
	}


	public function manage_student()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}

		$data['paper'] = $this->db->get("paper")->result();
		$data['show'] = $this->db->get("registration")->result();
		$this->load->view('admin/manage_student', $data);
	}


	public function delete_student()
	{
		$id = $this->input->get('q');
		$this->db->where("id", $id);
		$check = $this->db->delete('registration');
		if ($check) {
			$this->session->set_tempdata('student_delete_success', 'Successfully Deleted Record', 3);
			return redirect(base_url('admin/student-list'));
		} else {
			$this->session->set_tempdata('student_delete_error', 'Unsuccessfully Deleted Record', 3);
			return redirect(base_url('admin/student-list'));
		}
	}


	public function delete_paper()
	{
		$id = $this->input->get('id');
		$check = $this->ExamModel->paper_delete($id);
		if ($check) {
			$this->session->set_tempdata('delete_paper', 'Successfully Deleted Record', 3);
			return redirect(base_url('admin/paper_list'));
		} else {
			$this->session->set_tempdata('error_delete_paper', 'Successfully Deleted Record', 3);
			return redirect(base_url('admin/paper_list'));
		}
	}
	public function paper_update()
	{
		$id = $this->input->get('id');
		$con['show'] = $this->ExamModel->update_paper($id);
		$this->load->view('admin/paper_update', $con);

		if (isset($_POST['update'])) {


			if ($this->input->post("status") == '') {
				$status = 'Active';
			} else {
				$status = $this->input->post("status");
			}
			$data = array(
				"p_name" => $this->input->post("p_name"),
				"duration" => $this->input->post("duration"),
				"e_date" => $this->input->post("e_date"),
				"status" => $status,
				"message" => $this->input->post("message")
			);
			$check = $this->ExamModel->finalupdate_paper($id, $data);
			if ($check > 0) {
				$this->session->set_tempdata('paper_update', 'Successfully Paper Updated', 3);
				return redirect(base_url('admin/paper_list'));
			} else {
				$this->session->set_tempdata('paper_update', 'Error in Paper Updated', 3);
				return redirect(base_url('admin/paper_list'));
			}
		}
	}



	public function delete_msg()
	{
		$id = $this->input->get('q');
		$this->db->where("con_id=", $id);
		$this->db->delete("contact");
		redirect('../Admin_Contact');
	}
	public function news_delete()
	{
		$id = $this->input->get('q');
		$this->db->where("news_id=", $id);
		$this->db->delete("news");
		redirect('../Show_News');
	}
	
	public function sign_up()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$username = $this->input->post('uname');
			$useremail = $this->input->post('email');
			$userpwd = $this->input->post('pwd');
			//echo $useremail,$userpwd,$username;
			$data = array('aname' => $username, 'aemail' => $useremail, 'apwd' => $userpwd);
			$this->db->insert('admin', $data);
			$lid = $this->db->insert_id();
			if ($lid > 0) {
				header("location:http://localhost/college/AdminController/sign_up?sign_up_successful");
			}
		}
		$this->load->view('admin/sign_up1');
	}

	public function admin_login()
	{
		if (isset($_POST['signin'])) {

			$email = $this->input->post('email');
			$password = $this->input->post('pwd');

			// check user email is register or not
			$isEmailRegistered = $this->db->query("select * from admin where aemail = '$email'")->result();
			if (count($isEmailRegistered) > 0) {

				// check password is correct or not
				$checkPassword = $this->db->query("select * from admin where aemail = '$email' and apwd = '$password'")->result();

				if (count($checkPassword) > 0) {
					$this->session->set_userdata('admin_name', $checkPassword[0]->aname);
					$this->session->set_userdata('admin_id', $checkPassword[0]->aid);
					$this->session->set_userdata('password', $checkPassword[0]->apwd);
					redirect(base_url('admin/dashboard'), 'refresh');
				} else {
					$this->session->set_tempdata('admin_error', 'Please Enter Correct Password', 3);
					redirect(base_url('admin'), 'refresh');
				}
			} else {
				$this->session->set_tempdata('admin_error', 'Please Enter Correct Email', 3);
				redirect(base_url('admin'), 'refresh');
			}
		}

		$this->load->view('admin/login');
	}

	public function add_notice()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$notice_highlight = $this->input->post('notice_hlt');
			$notice_day = $this->input->post('day');
			$notice_month = $this->input->post('month');
			$notice_year = $this->input->post('year');
			$myTemp = $_FILES['file_notice']['tmp_name'];
			$myfile = $_FILES['file_notice']['name'];
			$sizefile = $_FILES['file_notice']['size'];
			$errorfile = $_FILES['file_notice']['error'];
			$typefile = $_FILES['file_notice']['type'];
			echo $typefile;
			if (($typefile == 'application/pdf') && ($sizefile < 2000000)) {
				if ($errorfile > 0) {
					echo 'error exsist on your file';
				} else {
					move_uploaded_file($myTemp, "assets/upload_img/notice_file/" . $myfile);
					$data = array('notice_day' => $notice_day, 'notice_month' => $notice_month, 'notice_year' => $notice_year, 'notice_hlt' => $notice_highlight, 'notice_file' => $myfile);
					$this->db->insert('notice', $data);
					$last_id = $this->db->insert_id();
					if ($last_id > 0) {
						redirect("../Add_Notice?add_s");
					}
				}
			} else {
				redirect("../Add_Notice?add_ns");
			}
		}
		$this->load->view('admin/add_notice');
	}
	// public function add_slider()
	// {
	// 	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// 		$notice_highlight = $this->input->post('notice_hlt');
	// 		$notice_day = $this->input->post('day');
	// 		$notice_month = $this->input->post('month');
	// 		$notice_year = $this->input->post('year');
	// 		$myTemp = $_FILES['file_notice']['tmp_name'];
	// 		$myfile = $_FILES['file_notice']['name'];
	// 		$sizefile = $_FILES['file_notice']['size'];
	// 		$errorfile = $_FILES['file_notice']['error'];
	// 		$typefile = $_FILES['file_notice']['type'];
	// 		echo $typefile;
	// 		if (($typefile == 'application/pdf') && ($sizefile < 2000000)) {
	// 			if ($errorfile > 0) {
	// 				echo 'error exsist on your file';
	// 			} else {
	// 				move_uploaded_file($myTemp, "assets/upload_img/notice_file/" . $myfile);
	// 				$data = array('notice_day' => $notice_day, 'notice_month' => $notice_month, 'notice_year' => $notice_year, 'notice_hlt' => $notice_highlight, 'notice_file' => $myfile);
	// 				$this->db->insert('notice', $data);
	// 				$last_id = $this->db->insert_id();
	// 				if ($last_id > 0) {
	// 					redirect("../Add_Notice?add_s");
	// 				}
	// 			}
	// 		} else {
	// 			redirect("../Add_Notice?add_ns");
	// 		}
	// 	}
	// 	$this->load->view('admin/add_notice');
	// }
	public function add_result()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$notice_highlight = $this->input->post('notice_hlt');

			$myTemp = $_FILES['file_notice']['tmp_name'];
			$myfile = $_FILES['file_notice']['name'];
			$sizefile = $_FILES['file_notice']['size'];
			$errorfile = $_FILES['file_notice']['error'];
			$typefile = $_FILES['file_notice']['type'];
			//echo $typefile;
			if (($typefile == 'application/pdf') && ($sizefile < 2000000)) {
				if ($errorfile > 0) {
					echo 'error exsist on your file';
				} else {
					$location = "assets/upload_img/result_file/" . $myfile;
					move_uploaded_file($myTemp, "assets/upload_img/result_file/" . $myfile);
					$data = array('title' => $notice_highlight, 'file_location' => $location);
					$this->db->insert('results', $data);
					$last_id = $this->db->insert_id();
					if ($last_id > 0) {
						redirect("../Add_Result?add_s");
					}
				}
			} else {
				redirect("../Add_Result?add_ns");
			}
		}
		$this->load->view('admin/add_result');
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url('admin'), 'refresh');
	}
	public function all_student()
	{
		$data['show'] = $this->db->get("student_regi")->result();
		$this->load->view('admin/all_students', $data);
	}





	public function add_course()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$course = array("course_name" => $this->input->post('course'));
			$return_value = $this->ExamModel->add_course($course);
			if ($return_value > 0) {
				return redirect("../add_course?success");
			} else {
				return redirect("../add_course?unsuccess");
			}
		}
		$this->load->view('admin/add_course');
	}


	public function add_notification()
	{


		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}

		$data['show'] = $this->ExamModel->notification_db();
		$this->load->view('admin/add_notification', $data);
	}

	public function notification_data()
	{
		$data = array(
			'title' => $this->input->post('title')
		);
		$check = $this->ExamModel->notification_store($data); //model function
		if ($check > 0) {
			$this->session->set_tempdata("success_notifi", "Successfully Notification Added...", 5);
			return redirect(base_url('admin/add-notification'));
		} else {
			$this->session->set_tempdata("error_notif", "Error in Added Notification ...", 5);
			return redirect(base_url('admin/add-notification'));
		}
		$this->load->view('admin/add_notification');
	}

	public function all_notification()
	{
		$data['show'] = $this->db->get("notification")->result();
		$this->load->view('admin/all_notification', $data);
	}




	// show all course question paper

	public function show_all_exam()
	{
		$data['show'] = $this->db->query("select * from course")->result();
		$this->load->view('admin/all_exam_list', $data);
	}


	// show single course question paper 
	public function question_list()
	{
		$id = $this->input->get('q');
		$data['show'] = $this->db->query("select * from questions join answers on  questions.ques_refrence=answers.ques_refrence where questions.exam_id='$id'")->result();
		$this->load->view('admin/question_list', $data);
	}

	// delete exam 

	public function delete_exam()
	{
		$id = $this->input->get('q');
		$this->db->where('exam_id=', $id);
		$this->db->delete('exam');
		return redirect('../exam_list?success');
	}

	public function delete_subject()
	{
		$id = $this->input->get('q');
		$this->db->where('course_id=', $id);
		$this->db->delete('course');
		return redirect('../subject_list?success');
	}



	public function delete_question()
	{
		$id = $this->input->get('q');
		$this->db->where('ques_refrence=', $id);
		$this->db->delete('questions');
		// $this->db->delete('answers');
		return redirect('../exam_list');
		// return redirect('../question_list');
	}


	public function notification_list()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}
		$this->db->order_by('id', 'desc');
		$data['show'] = $this->db->get("notification")->result();
		$this->load->view('admin/notification_list', $data);
	}


	public function delete_notifi()
	{
		$id = $this->input->get('q');
		$this->db->where('id=', $id);
		$this->db->delete('notification');
		$this->session->set_tempdata('delete_notifi', 'Notification Deleted Successfully', 5);
		return redirect(base_url('admin/notification_list'));
	}

	public function delete_list($id = 0)
	{
		$id = $this->input->get('id');
		$check = $this->ExamModel->delete_data($id);
		if ($check) {
			// $this->session->set_flashdata("deleted","successful deleted");
			return redirect("notification_list?success&id=$check");
		} else {
			// $this->session->set_flashdata("No deleted","Unsuccessful deleted");
			return redirect("notification_list?error");
		}
	}

	public function our_branches()
	{

		$this->load->view('frontend/our_branches');
	}
	public function add_student()
	{
		//$data['show']=$this->db->get("add")->result();
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$name = $this->input->post('name');
			$class = $this->input->post('class');

			$myTemp = $_FILES['file_notice']['tmp_name'];
			$myfile = $_FILES['file_notice']['name'];
			$sizefile = $_FILES['file_notice']['size'];
			$errorfile = $_FILES['file_notice']['error'];
			$typefile = $_FILES['file_notice']['type'];
			//echo $typefile;
			if (($typefile == "image/jpg") || ($typefile == "image/jpeg") || ($typefile == "image/png")) {
				if ($errorfile > 0) {
					echo 'error exsist on your file';
				} else {
					$location = "assets/upload_img/staff_file/" . $myfile;
					move_uploaded_file($myTemp, "assets/upload_img/staff_file/" . $myfile);
					$data = array('name' => $name, 'class' => $class, 'image' => $location);
					$this->db->insert('student_slider', $data);
					$last_id = $this->db->insert_id();
					if ($last_id > 0) {
						redirect("../add_student?success");
					}
				}
			} else {
				redirect("../add_student?failed");
			}
		}
		$this->load->view('admin/add_student');
	}
	public function enquiry_list()
	{
		$stu_data['show'] = $this->ExamModel->enquiry_db();
		$this->load->view('admin/enquiry_list', $stu_data);
	}



	public function contact_list()

	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}
		$this->db->order_by('id', 'desc');
		$data['contact'] = $this->db->get("contact")->result();
		$this->load->view('admin/contact_list', $data);
	}

	public function enquiry_data()
	{
		$data = array(
			"name" => $this->input->post("name"),
			"email" => $this->input->post("email"),
			"number" => $this->input->post("number"),
			"subject" => $this->input->post("subject"),
			"message" => $this->input->post("message")
		);
		$check = $this->ExamModel->enquiry_store($data);
		if ($check > 0) {
			return redirect("enquiry?success&id=$check");
		} else {
			return redirect("enquiry?error");
		}
	}

	public function delete_enquiry()
	{
		$id = $this->input->get('id');
		$check = $this->ExamModel->enquiry($id);
		if ($check > 0) {
			$this->session->set_tempdata('enquiry_success', 'Enquiry Deleted Successfully', 5);
			return redirect(base_url('admin/enquiry_list'));
		} else {
			$this->session->set_tempdata('enquiry_error', 'Error in Enquiry Deleted', 5);
			return redirect(base_url('admin/enquiry_list'));
		}
	}


	public function delete_contact()
	{
		$id = $this->input->get('id');
		$check = $this->ExamModel->delete_contact($id);
		if ($check > 0) {
			$this->session->set_tempdata('contact_success', 'Contact Deleted Successfully', 5);
			return redirect(base_url('admin/contact_list'));
		} else {
			$this->session->set_tempdata('contact_error', 'Error in Contact Deleted', 5);
			return redirect(base_url('admin/contact_list'));
		}
	}

	public function delete_data($id = 0)
	{
		$id = $this->input->get('q');
		$this->db->where('id=', $id);
		$this->db->delete('student_slider');
		return redirect('../student_slider');
	}

	public function set_exam()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$data_array = array();
			$data_array['course_id'] = $this->input->post('course');
			$data_array['exam_name'] = $this->input->post('ex_name');
			$data_array['duration'] = $this->input->post('duration');
			$duration_type = $this->input->post('duration_type');
			if ($this->input->post('duration_type') == 'hours') {
				$total_hour = $this->input->post('duration');
				$data_array['duration'] =  intval($total_hour) * 60;
			}
			$data_array['total_question'] = $this->input->post('question');
			$data_array['total_mark'] = $this->input->post('mark');
			$data_array['avg_question_mark'] = $this->input->post('max_ques');

			// print_r($data_array);
			$this->db->insert("exam", $data_array);
			$last_id = $this->db->insert_id();
			if ($last_id > 0) {
				return	redirect("../set_exam?add_s");
			}
		}
		$this->load->view('admin/set_exam');
	}

	public function exam_edit()
	{

		$id = $this->input->get('q');
		$this->db->where('exam_id=', $id);
		$data['exam'] = $this->db->get('exam')->result();


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {


			$data_array = array();

			$data_array['exam_name'] = $this->input->post('ex_name');
			$data_array['duration'] = $this->input->post('duration');
			$duration_type = $this->input->post('duration_type');
			if ($this->input->post('duration_type') == 'hours') {
				$total_hour = $this->input->post('duration');
				$data_array['duration'] =  intval($total_hour) * 60;
			}
			$data_array['total_question'] = $this->input->post('question');
			$data_array['total_mark'] = $this->input->post('mark');
			$data_array['avg_question_mark'] = $this->input->post('max_ques');

			$this->db->where('exam_id', $id);
			$this->db->update("exam", $data_array);
			return redirect('../exam_list?updated');
		}
		$this->load->view('admin/edit_exam', $data);
	}


	public function declare_result()
	{
		$this->load->library('session');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$course_id = $this->input->post('course');
			$exam_id = $this->input->post('paper_id');
			$status = $this->input->post('status');


			$response = $this->db->query("update exam set `admin_approve` = $status where `exam_id`= $exam_id;");
			if ($response) {
				$this->session->set_flashdata('success', 'Successfully updated Exam Status....');
			}
		}

		$this->load->view('admin/declare_result');
	}
	
	public function exam_approval()
	{

		if (empty($this->session->userdata('admin_id'))) {
			$this->session->set_tempdata('admin_error', 'Session Expired.. Login Again', 5);
			redirect(base_url('admin'));
		}

		// echo 'working';
		$selected_students = $this->input->post('approvalStudent');

		foreach ($selected_students as $key => $value) {
			$data['exam_id'] =  $this->input->post('exam_name');
			$data['student_id'] = $value;
			$data['status'] = 1;
			$response = $this->ExamModel->add_permission($data);

		
			if ($response) {
				$this->session->set_tempdata('success', 'Successfully Updated ....',5);
				redirect( base_url('admin/manage-student'));
			}
		}
	}
}
