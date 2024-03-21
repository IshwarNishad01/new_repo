<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['admin'] = 'AdminController/admin_login';
$route['admin/dashboard'] = 'AdminController/index';
$route['admin/logout'] = 'AdminController/logout';
$route['ED'] = 'AdminController/event_delete';
$route['ND'] = 'AdminController/news_delete';
$route['EA'] = 'AdminController/add_newss';
$route['SE'] = 'AdminController/show_events';
$route['Show_News'] = 'AdminController/show_news';
$route['Update_News'] = 'AdminController/show_up_news';
$route['SDelete'] = 'AdminController/stu_delete';
$route['admin/all_video'] = 'AdminController/all_videos';
$route['admin/delete_video'] = 'AdminController/delete_video';
$route['All_Student'] = 'AdminController/all_student';
$route['admin/add_video'] = 'AdminController/add_videos';
$route['GD'] = 'AdminController/gallery_delete';



// $route['admin'] = 'AdminController/admin_login';


$route['admin/add_paper'] = 'AdminController/add_paper';
$route['admin/paper_list'] = 'AdminController/paper_list';


$route['admin/student-list'] = 'AdminController/show_all_student';
$route['admin/manage-student'] = 'AdminController/manage_student';
$route['admin/delete_student'] = 'AdminController/delete_student';



$route['up'] = 'AdminController/up_n';
$route['Admin_Add'] = 'AdminController/sign_up';
$route['veiwstu'] = 'AdminController/veiwstu';
$route['set_exam'] = 'AdminController/set_exam';
$route['add_question'] = 'AdminController/add_question';

$route['admin/paper_data'] = 'AdminController/paper_data';

$route['admin/delete_paper'] = 'AdminController/delete_paper';
$route['paper_update'] = 'AdminController/paper_update';
$route['finalupdate'] = 'AdminController/finalupdate';
$route['all_paper'] = 'AdminController/all_paper';
$route['Add_Notice'] = 'AdminController/add_notice';
$route['add_course'] = 'AdminController/add_course';
$route['declare_result'] = 'AdminController/declare_result';
$route['view_exam_result'] = 'AdminController/view_exam_result';
$route['admin/student_registration'] = 'AdminController/student_registration';
$route['registype'] = 'AdminController/registype';
$route['delete_regist/(:any)'] = 'AdminController/delete_regist/$1';
$route['view_exams'] = 'AdminController/view_exams';
$route['upload_admission'] = 'AdminController/upload_admission';
$route['ad_form_list'] = 'AdminController/ad_form_list';
$route['ad_f_delete'] = 'AdminController/ad_f_delete';
$route['Admin_Contact'] = 'AdminController/all_msg';
$route['Delete_Msg'] = 'AdminController/delete_msg';
$route['Delete_Career'] = 'AdminController/career_delete';
$route['All_Career'] = 'AdminController/all_career';
$route['add_frenchies_form'] = 'AdminController/add_frenchies_form';
$route['frenchies_form_list'] = 'AdminController/frenchies_form_list';
$route['delete_frenchies'] = 'AdminController/delete_frenchies';
$route['add_staff'] = 'AdminController/add_staff';
$route['staff_list'] = 'AdminController/staff_list';
$route['delete_staff'] = 'AdminController/delete_staff';
$route['admin/add-notification'] = 'AdminController/add_notification';
$route['admin/notification_data'] = 'AdminController/notification_data';
$route['admin/notification_list'] = 'AdminController/notification_list';
$route['admin/delete-notifi'] = 'AdminController/delete_notifi';
$route['delete_list'] = 'AdminController/delete_list';
$route['our_branches'] = 'AdminController/our_branches';
$route['add_student'] = 'AdminController/add_student';
$route['admin/enquiry_list'] = 'AdminController/enquiry_list';
$route['enquiry_data'] = 'AdminController/enquiry_data';
$route['admin/delete_enquiry'] = 'AdminController/delete_enquiry';
$route['delete_data'] = 'AdminController/delete_data';
$route['delete_question'] = 'AdminController/delete_question';
$route['delete_exam'] = 'AdminController/delete_exam';
$route['delete_subject'] = 'AdminController/delete_subject';
$route['exam_list'] = 'AdminController/exam_list';
$route['subject_list'] = 'AdminController/subject_list';
$route['question_list'] = 'AdminController/question_list';
$route['all-exam'] = 'AdminController/show_all_exam';
$route['exam_edit'] = 'AdminController/exam_edit';
$route['change_status'] = 'AdminController/change_status';
$route['logout_admin'] = 'AdminController/logout';



// Typing Route Front End ...........

$route['default_controller'] = 'HomeController';
$route['home'] = 'HomeController/index';
$route['about'] = 'HomeController/about';
$route['video'] = 'HomeController/video';
$route['gallery'] = 'HomeController/t_gallery';
$route['course'] = 'HomeController/course';
$route['team'] = 'HomeController/team';
$route['service'] = 'HomeController/service';
$route['notification'] = 'HomeController/notification';
$route['payment'] = 'HomeController/payment';
$route['testimonial'] = 'HomeController/testimonial';
$route['contact'] = 'HomeController/contactus';
$route['contactdata'] = 'HomeController/contactdata';
$route['registration'] = 'HomeController/regist';
$route['regist_store'] = 'HomeController/regist_store';
$route['login'] = 'HomeController/login';
$route['login-check'] = 'HomeController/login_check';


// user registration for both users
$route['registration_user'] = 'HomeController/registration_user';
$route['registration_user2'] = 'HomeController/registration_user2';



// for user dashboard


$route['dashboard'] = 'HomeController/dash_login';
$route['enquiry'] = 'HomeController/enquiry';
$route['add_result'] = 'HomeController/add_result';
$route['list_result'] = 'HomeController/result_list';

$route['paper_info'] = 'HomeController/paper_info';
$route['paper_view'] = 'HomeController/paper_view';
$route['user-logout'] = 'HomeController/user_logout';




// Typing Route Front End ...........

// typing exam related routes
$route['exam_paper'] = 'HomeController/show_question_paper';
$route['submit-exam'] = 'HomeController/submit_exam';
$route['Msg'] = 'HomeController/msg';
$route['submit_exam'] = 'HomeController/paper_submit';
// new update
$route['exam-complete'] = 'HomeController/exam_complete';
$route['all-answers'] = 'HomeController/show_questions';


$route['timeup'] = 'HomeController/exam_over';
$route['exam_paper_final'] = 'HomeController/exam_paper_final';
$route['show_result'] = 'HomeController/show_result';
// $route['registration'] = 'HomeController/registration';
$route['stu_login'] = 'HomeController/stu_login';
$route['resultslist'] = 'HomeController/resultslist';
$route['about'] = 'HomeController/about';
$route['Career'] = 'HomeController/career';
$route['News_Details'] = 'HomeController/news_read';
$route['News'] = 'HomeController/alln';
$route['dcadetails'] = 'HomeController/dcadetails';
$route['bcadetails'] = 'HomeController/bcadetails';
$route['pgdcadetails'] = 'HomeController/pgdcadetails';
$route['mcadetails'] = 'HomeController/mcadetails';
$route['apply'] = 'HomeController/apply';
$route['faculty'] = 'HomeController/faculty';
$route['mission'] = 'HomeController/mission';
$route['infras'] = 'HomeController/infras';
$route['privacy'] = 'HomeController/privacy';
// $route['contact'] = 'HomeController/contact';
// $route['gallery'] = 'HomeController/gallery';
$route['All_N'] = 'HomeController/all_noti';
$route['event'] = 'HomeController/event';
$route['allcourse'] = 'HomeController/allcourse';
$route['all-course'] = 'HomeController/all_course';
$route['viewdetails'] = 'HomeController/viewdetails';
// $route['exam_paper'] = 'HomeController/exam_paper';
// $route['dashboard'] = 'HomeController/dashboard';
// $route['payment'] = 'HomeController/payment';

$route['frenchies_application'] = 'HomeController/frenchies_application';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
