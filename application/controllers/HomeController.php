<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

	public function index()
	{
		$data['addnotification'] = $this->db->get("notification")->result();
		$data['video'] = $this->db->get("videos",3)->result();
		$this->load->view('elearning/index',$data);
	}

	public function about()
	{
		$this->load->view('elearning/about');
	}
	public function course()
	{
		$data['addnotification'] = $this->db->get("notification")->result();
		$data['video'] = $this->db->get("videos",3)->result();
		$this->load->view('elearning/course',$data);
	}
	public function video()
	{
		$data['video'] = $this->db->get("videos")->result();
		$this->load->view('elearning/video',$data);
	}
	public function t_gallery()
	{
		$this->load->view('elearning/gallery');
	}
	public function contactus()
	{
		$show['show']=$this->ExamModel->contact_db();
		$this->load->view('elearning/contact',$show);
	}
	public function contactdata()
	{
		$data=array(
			"name"=>$this->input->post("name"),
			"email"=>$this->input->post("email"),
			"subject"=>$this->input->post("subject"),
			"message"=>$this->input->post("message")
		);
		$check=$this->ExamModel->contact_info($data);
			if ($check > 0) {
				$this->session->set_flashdata("Successfull added");
			} else {
				$this->session->set_flashdata("Unsuccessfull added");
			}
	}
	public function team()
	{
		$this->load->view('elearning/team');
	}
	public function service()
	{
		$this->load->view('elearning/service');
	}
	public function payment_pro()
	{
		$this->load->view('elearning/payment');
	}
	public function testimonial()
	{
		$this->load->view('elearning/testimonial');
	}

	public function add_result()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$title = $this->input->post('title');

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
					$data = array('title' => $title, 'file_location' => $location);
					$this->db->insert('results', $data);
					$last_id = $this->db->insert_id();
					if ($last_id > 0) {
						echo "Successfull.....";
						// redirect("elearning/add_result?success");
					}
				}
			} else {
						echo "Unsuccessfull.......";
				// redirect("elearning/add_result?Error");
			}
		}
		$this->load->view('elearning/add_result');
	}

	public function result_list()
	{
		$data['shaw'] = $this->db->get("results")->result();
		$this->load->view('elearning/result_list', $data);
	}

	public function regist()
	{
		$register_data['stu_info'] = $this->ExamModel->regist_data();
		$this->load->view('elearning/registration',$register_data);
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
			$check=$this->ExamModel->regist_type($data);
			if ($check > 0) {
				// return redirect("regist?success&id=$check");
				// $this->session->set_flashdata('item', 'value');
				$this->session->set_flashdata('Success','Successfull added');
				$this->load->view("elearning/registration");
			} else {
				// return redirect("regist?error");
				$this->session->set_flashdata("Error","Unsuccessfull added");
				$this->load->view("elearning/registration");
			}
		}

	public function login()
	{
		$this->load->view('elearning/login');
	}

	public function dash_login()
	{
		$this->load->view('elearning/dashboard');
	}

	public function enquiry()
	{
		$this->load->view('elearning/enquiry');
	}

	public function apply()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$sname = $this->input->post('sname');
			$fname = $this->input->post('fname');
			$mname = $this->input->post('mname');
			$gender = $this->input->post('gender');
			$dob = $this->input->post('dob');
			$mdm = $this->input->post('medium');
			$cast = $this->input->post('cast');
			$m_sts = $this->input->post('married_status');
			$adhar = $this->input->post('adhar');
			$home_add = $this->input->post('home_add');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$pin = $this->input->post('pin');
			$rlg = $this->input->post('religion');
			$mobino = $this->input->post('mno');
			$teleno = $this->input->post('tno');
			$ename = $this->input->post('ename');

			$s_cource = $this->input->post('selectcourse');
			$selectuniversity = $this->input->post('selectuniversity');
			$sub = $this->input->post('sub');
			$pass_year = $this->input->post('pyear');
			$per = $this->input->post('per');
			$h_s = $this->input->post('healthstate');
			$income = $this->input->post('income');

			$data = array('stu_name' => $sname, 'father_name' => $fname, 'mother_name' => $mname, 'gender' => $gender, 'dateofbirth' => $dob, 'edu_medium' => $mdm, 'category' => $cast, 'married_sts' => $m_sts, 'adhar' => $adhar, 'home_addres' => $home_add, 'city' => $city, 'state' => $state, 'pin' => $pin, 'religion' => $rlg, 'mobi_nu' => $mobino, 'stu_email' => $ename, 't_nu' => $teleno, 'adimission_course' => $s_cource, 'university' => $selectuniversity, 'pass_sub' => $sub, 'pass_year' => $pass_year, 'pass_per' => $per, 'health_sts' => $h_s, 'family_income' => $income);
			$this->db->insert('student_regi', $data);
			$l_id = $this->db->insert_id();
			if ($l_id > 0) {
				redirect("../apply?add_s&id=$l_id");
			}
		}
		$this->load->view('frontend/admition');
	}
	public function faculty()
	{
		$this->load->view('frontend/staff');
	}
	public function mission()
	{

		$this->load->view('frontend/vision');
	}
	public function infras()
	{
		$this->load->view('frontend/campus');
	}
	public function privacy()
	{
		$this->load->view('frontend/privacy-policy');
	}
	
	public function paper_info()
	{
		$data['show'] = $this->db->query('select * from paper where status = "active"')->result();
		$this->load->view('elearning/paper_info',$data);
	}
	public function paper_view()
	{
		$id = $this->input->get('id');
		$data['show'] = $this->db->query("select * from paper where id = $id")->result();
		$this->load->view('elearning/paper_view',$data);
	}

	public function msg()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$en_name = $this->input->post('en_name');
			$en_mail = $this->input->post('en_email');
			$en_msg = $this->input->post('msg');
			$data = array('con_name' => $en_name, 'con_email' => $en_mail, 'msg_info' => $en_msg);
			$this->db->insert("contact", $data);
			$lid = $this->db->insert_id();
			if ($lid > 0) {
				redirect("../contact?success");
			}
		}
	}
	public function gallery()

	{
		$data['show'] = $this->db->get("gallery")->result();
		$this->load->view('frontend/gallery', $data);
	}
	public function alln()
	{
		$data['show'] = $this->db->get("news")->result();
		$this->load->view('frontend/all_new', $data);
	}
	public function resultslist()
	{
		$data['show'] = $this->db->get("results")->result();
		$this->load->view('frontend/all_results', $data);
	}
	public function frenchies_application()
	{
		$data['show'] = $this->db->query("select * from frenchies_form order by id desc ")->result();
		$this->load->view('frontend/frenchies', $data);
	}
	public function all_noti()
	{
		$data['show'] = $this->db->get("notice")->result();
		$this->load->view('frontend/all_notice', $data);
	}
	public function event()
	{
		$this->load->view('frontend/event');
	}
	public function allcourse()
	{
		$this->load->view('frontend/allcourse');
	}
	public function viewdetails()
	{
		$this->load->view('frontend/viewdetails');
	}
	public function payment()
	{
		$this->load->view('frontend/payment');
	}
	public function career()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$en_name = $this->input->post('en_name');
			$en_mail = $this->input->post('en_email');
			$mobino = $this->input->post('mobno');
			$msg = $this->input->post('msg');
			$myTemp = $_FILES['file_notice']['tmp_name'];
			$myfile = $_FILES['file_notice']['name'];
			$sizefile = $_FILES['file_notice']['size'];
			$errorfile = $_FILES['file_notice']['error'];
			$typefile = $_FILES['file_notice']['type'];
			// echo $typefile;
			// echo $myfile;
			if (($typefile == "application/pdf")) {
				if ($errorfile > 0) {
					echo 'error exsist on your file';
				} else {
					move_uploaded_file($myTemp, "assets/upload_img/career_file/" . $myfile);
					// $data=array('name'=>$en_name,'email'=>$en_mail,'mobile'=>$mobino,'file'=>$myfile,'msg'=>$msg);  
					// $this->db->insert('career',$data);
					// $last_id=$this->db->insert_id();
					//                 if ($last_id>0) {
					//                 	redirect("Career?success");
					//                 }
				}
			}
		}

		$this->load->view('frontend/career');
	}


	public function exam_paper()
	{

		$examID = $this->input->get('id');
		// show student login page when student is not login
		if (empty($_SESSION['regino'])) {
			// $this->load->view('frontend/student_login');
			redirect('stu_login');
		}


		$studentID = $_SESSION['regino'];

		// $data['show'] = $this->db->query("select * from exam join course on  exam.course_id=course.course_id order by exam_id desc")->result();

		// $studentExits = $this->db->query("select * from stu_result where student_id = $studentID and exam_id = $examID")->result();

		// if (!empty($adminAproval)) {
		// }
		// print_r($student_sheet);

		// if (empty($studentExits)) {
		$this->load->view('frontend/question_paper');
		// } else {

		// $adminAproval =  $this->db->query("select * from stu_result join exam on exam.course_id=stu_result.course where stu_result.student_id = $studentID and exam.admin_approve = 1")->result();
		// if (empty($adminAproval)) {
		// 	$adminAproval['isAdminApprove'] = false;
		// 	$this->load->view('frontend/show_result', $adminAproval);
		// 	// print_r($adminAproval);
		// } else {
		// $adminAproval['isAdminApprove'] = true;
		// $student_sheet = array(
		// 	'student_name' => $adminAproval[0]->student_name,
		// 	'total_question' => $adminAproval[0]->total_question,
		// 	'total_marks' => $adminAproval[0]->total_marks,
		// 	'student_marks' => $adminAproval[0]->student_marks,
		// 	'correct_answer' => $adminAproval[0]->correct_answer,
		// 	'incorrect_answer' => $adminAproval[0]->incorrect_answer,
		// 	'isAdminApprove' => true,
		// );
		// $this->load->view('frontend/show_result');
		// $this->load->view('frontend/show_result', $student_sheet);
		// }
		// }
	}

	public function show_result()
	{

		$examId = $this->input->get('id');
		$studentID = $_SESSION['regino'];

		$adminAproval =  $this->db->query("select * from stu_result join exam on exam.exam_id=stu_result.exam_id where exam.exam_id = $examId and stu_result.student_id = $studentID and exam.admin_approve = 1")->result();
		

		if (empty($adminAproval)) {
			$adminAproval['isAdminApprove'] = false;
			$this->load->view('frontend/show_result', $adminAproval);
			// print_r($adminAproval);
		} else {
			$adminAproval['isAdminApprove'] = true;
			$student_sheet = array(
				'student_name' => $adminAproval[0]->student_name,
				'total_question' => $adminAproval[0]->total_question,
				'total_marks' => $adminAproval[0]->total_marks,
				'exam_name' => $adminAproval[0]->exam_name,
				'student_marks' => $adminAproval[0]->student_marks,
				'correct_answer' => $adminAproval[0]->correct_answer,
				'incorrect_answer' => $adminAproval[0]->incorrect_answer,
				'isAdminApprove' => true,
			);
			// print_r($student_sheet);
			$this->load->view('frontend/show_result', $student_sheet);
		}
	}
	// show student dashboard after successfully login
	public function dashboard()
	{
		$course_id = $_SESSION['course_name'];

		$data['allExams'] = $this->db->query("select * from exam where course_id = $course_id and status = 'active'")->result();


		$this->load->view('frontend/dashboard', $data);
	}

	public function exam_paper_final()
	{

		$studentID = $_SESSION['regino'];

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$num = $this->input->post("num");
			for ($i = 1; $i <= $num; $i++) {
				$num = $this->input->post("n$i");
			}
		}
		$this->load->view('frontend/exam_paper');
	}



	// $this->db->query("select * from regist_tb where student_email='$student_email' and student_pwd='$student_pwd'")->result();

	public function exam_complete()
	{

		// echo 'exam over';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$course_id = $_SESSION['course_name'];
			$exam_id = $_SESSION['exam_id'];


			$data = $this->db->query("select * from exam where course_id = $course_id and exam_id = $exam_id")->result();

			$question_mark =  $data[0]->avg_question_mark;
			$totalquestion =  $data[0]->total_question;
			$totalmarks =  $data[0]->total_mark;
			$examId =  $data[0]->exam_id;

			// print_r($data);
			// echo $this->QuestionModel->findCorrectAnswerBy($question) . '<br>';
			// echo $_POST['answer' . $question] . '<br>';

			$score = 0;
			$not_selected = 0;
			$wrong_selected = 0;


			foreach ($_POST['questions'] as $question) {

				$selected_answers[] = $_POST['answer' . $question];


				if ($this->QuestionModel->findCorrectAnswerBy($question) == $_POST['answer' . $question]) {
					$score++;
				} elseif ($_POST['answer' . $question] == 'no answer') {
					$not_selected++;
				} else {
					$wrong_selected++;
				}
			}

			$this->session->set_userdata('selected_answers', $selected_answers);


			$result = array(
				'total_question' => $totalquestion,
				'total_marks' => $totalmarks,
				'student_marks' => $score * $question_mark,
				'correct_answers' => $score,
				'not_selected' => $not_selected,
				'wrong_answer' => $wrong_selected,
			);


			$data = array(
				"student_id" => $_SESSION['regino'],
				"student_name" => $_SESSION['first_name'] . ' ' . $_SESSION['last_name'],
				"course" => $_SESSION['course_name'],
				"exam_id" => $examId,
				"total_question" => $totalquestion,
				"total_marks" => $totalmarks,
				"student_marks" => $score * $question_mark,
				"correct_answer" => $score,
				"incorrect_answer" => $wrong_selected,
				"not_selected_answer" => $not_selected,
			);
			// print_r($data);
			$check = $this->db->insert("stu_result", $data);
			if ($check > 0) {
				return redirect("../dashboard?success");
				// echo 'student result data submitted successfully';
			} else {
				return redirect("../dashboard?error");
				// echo 'student result data submitted failed';
			}


			// $this->load->view('frontend/show-result', $result);
		}
	}


	public function paper_submit()
	{

		// echo 'exam over';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {


			$course_id = $_SESSION['course_name'];


			$data = $this->db->query("select * from exam where course_id = $course_id")->result();

			$question_mark =  $data[0]->avg_question_mark;
			$totalquestion =  $data[0]->total_question;
			$totalmarks =  $data[0]->total_mark;

			// print_r($data);
			// echo $this->QuestionModel->findCorrectAnswerBy($question) . '<br>';
			// echo $_POST['answer' . $question] . '<br>';

			$score = 0;
			$not_selected = 0;
			$wrong_selected = 0;


			foreach ($_POST['questions'] as $question) {

				$selected_answers[] = $_POST['answer' . $question];


				if ($this->QuestionModel->findCorrectAnswerBy($question) == $_POST['answer' . $question]) {
					$score++;
				} elseif ($_POST['answer' . $question] == 'no answer') {
					$not_selected++;
				} else {
					$wrong_selected++;
				}
			}

			$this->session->set_userdata('selected_answers', $selected_answers);


			$result = array(
				'total_question' => $totalquestion,
				'total_marks' => $totalmarks,
				'student_marks' => $score * $question_mark,
				'correct_answers' => $score,
				'not_selected' => $not_selected,
				'wrong_answer' => $wrong_selected,
			);


			$this->load->view('frontend/student_result', $result);
		}
	}

	public function show_questions()
	{

		$this->load->view('frontend/all_answers');
	}



	public function registration()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$regino = rand(111111111, 999999999);
			$data = array(
				"regino" => $regino,
				"first_name" => $this->input->post("first_name"),
				"last_name" => $this->input->post("last_name"),
				"student_dob" => $this->input->post("student_dob"),
				"student_email" => $this->input->post("student_email"),
				"student_pwd" => $this->input->post("student_pwd"),
				"student_parents" => $this->input->post("student_parents"),
				"student_num" => $this->input->post("student_num"),
				"student_address" => $this->input->post("student_address"),
				"course_name" => $this->input->post("course_name")
			);
			$check = $this->db->insert("regist_tb", $data);
			if ($check > 0) {
				return redirect("../registration?success&regino=$regino");
			} else {
				return redirect("../registration?error");
			}
		}
		$this->load->view('frontend/registration_form');
	}

	public function stu_login()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$student_email = $this->input->post('student_email');
			$student_pwd = $this->input->post('student_pwd');

			$check = $this->db->query("select * from regist_tb where student_email='$student_email' and student_pwd='$student_pwd'")->result();
			// print_r($check);
			if (count($check) > 0) {
				foreach ($check as $check) {
					$_SESSION['first_name'] = $check->first_name;
					$_SESSION['last_name'] = $check->last_name;


					$_SESSION['course_name'] = $check->course_name;
					$_SESSION['regino'] = $check->regino;
				}
				//echo $_SESSION['first_name'];exit();
				return redirect("../dashboard");
			} else {
				echo "invalid id pwd";
			}
		}
		$this->load->view('frontend/student_login');
	}
}
