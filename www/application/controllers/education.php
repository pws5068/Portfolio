<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Education extends CI_Controller {

	public function index()
	{
		$this->smarty->addOnload('$("#toplevel_education").addClass("active");');
		$this->smarty->assign('large_header_text','Educational Background');
		$this->smarty->assign('small_header_text','Penn State Computer Science &amp; Engineering');
		$this->smarty->assign('page_content','toplevel/education.tpl');
		$this->smarty->view();
	}
	public function course($course)
	{
		$course = preg_replace("/[^a-zA-Z0-9-\s]/","",$course);
		
		if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/application/views/course/'.$course.'.tpl'))
		{
			header('Location: /page/404.php');
			exit();
		}
		
		$display_name = ucwords(preg_replace("/-/"," ",$course));
		
		$this->smarty->assign('large_header_text',$display_name);
		$this->smarty->assign('small_header_text','Pennsylvania State University - Computer Science &amp; Engineering');
		$this->smarty->assign('page_content','course/'.$course.'.tpl');
		$this->smarty->view();
	}
}

/* End of file education.php */
/* Location: ./application/controllers/education.php */