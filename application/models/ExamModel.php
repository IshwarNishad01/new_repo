<?php

/**
 * 
 */
class ExamModel extends CI_Model
{
	public function add_course($course)
	{
		$this->db->insert("course", $course);
		$q = $this->db->insert_id();
		return $q;
	}
	public function add_student($course)
	{
		$this->db->insert("student_list", $course);
		$q = $this->db->insert_id();
		return $q;
	}
	public function get_course()
	{
		$q = $this->db->query("select * from course join exam on exam.course_id=course.course_id")->result();
		return $q;
	}


	public function get_course_name()
	{
		$q = $this->db->query("select * from course")->result();
		return $q;
	}

	public function get_exams_by_course($course_id)
	{
		return $this->db->get_where('exam', array('course_id' => $course_id))->result();
	}



	public function get_exam()
	{
		$q = $this->db->get("exam")->result();
		return $q;
	}


	public function student_db()
	{
		$data = $this->db->query("select * from student_slider")->result();
		return $data;
	}
	public function course_db()
	{
		$data = $this->db->query("select * from course")->result();
		return $data;
	}


	// Typing Model .........

	public function contact_info($data)
	{
		$this->db->insert("contact", $data);
		return true;
	}


	public function insert_enqiry($data)
	{
		$this->db->insert("enquiry_tb", $data);
		return true;
	}


	public function contact_db()
	{
		$data = $this->db->query('select * from contact')->result();
		return $data;
	}
	public function regist_type($data)
	{
		$this->db->insert("register", $data);
		$id = $this->db->insert_id();
		return $id;
	}
	public function regist_data()
	{
		$data = $this->db->query('select * from register')->result();
		return $data;
	}
	public function delete_data($id)
	{
		$q = $this->db->where("id", $id)->delete("notification");
		return $q;
	}

	public function delete_student($id)
	{
		$response = $this->db->where("id", $id)->delete("register");
		return $response;
	}

	public function delete_contact($id)
	{
		$response = $this->db->where("id", $id)->delete("contact");
		return $response;
	}


	public function logincheck($email, $password)
	{
		$data = $this->db->query("select * from register where email ='$email' and password='$password'")->result();
		return $data;
	}
	public function enquiry_store($data)
	{
		$this->db->insert("enquiry_tb", $data);
		$id = $this->db->insert_id();
		return $id;
	}


	public function insert_result($data)
	{
		$response = $this->db->insert("results", $data);
		// $id = $this->db->insert_id();
		return $response;
	}


	public function enquiry_db()
	{
		$data = $this->db->query("select * from enquiry_tb")->result();
		return $data;
	}
	public function enquiry($id)
	{
		$q = $this->db->where("id", $id)->delete("enquiry_tb");
		return $q;
	}

	public function notification_store($data)
	{
		$this->db->insert("notification", $data);
		$q = $this->db->insert_id();
		return $q;
	}

	public function notification_db()
	{
		$data = $this->db->query("select * from notification")->result();
		return $data;
	}
	public function video_delete($id)
	{
		$q = $this->db->where("id", $id)->delete("videos");
		return $q;
	}

	public function paperdata($data)
	{
		$this->db->insert("paper", $data);
		$q = $this->db->insert_id();
		return $q;
	}
	public function insert_paper()
	{
		$data = $this->db->query("select * from paper")->result();
		return $data;
	}
	public function paper_delete($id)
	{
		$q = $this->db->where("id", $id)->delete("paper");
		return $q;
	}
	public function update_paper($id)
	{
		$q = $this->db->where("id", $id)->get("paper")->result();
		return $q;
	}
	public function finalupdate_paper($id, $data)
	{
		$q = $this->db->where("id", $id)->update("paper", $data);
		return $q;
	}

	public function add_permission($data)
	{
		$response =	$this->db->insert("permission", $data);

		return $response;
	}
}
