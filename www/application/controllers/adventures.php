<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adventures extends CI_Controller {

	public function index()
	{
		$this->smarty->addOnload('$("#toplevel_adventures").addClass("active");');
		$this->smarty->assign('large_header_text','Hobbies &amp; Adventures');
		$this->smarty->assign('small_header_text','Personal Life');
		$this->smarty->assign('page_content','toplevel/adventures.tpl');
		$this->smarty->view();
	}
}

/* End of file adventures.php */
/* Location: ./application/controllers/adventures.php */