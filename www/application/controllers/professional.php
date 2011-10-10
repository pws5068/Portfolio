<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Professional extends CI_Controller {

	public function index()
	{
		$this->smarty->addOnload('$("#toplevel_professional").addClass("active");');
		$this->smarty->assign('large_header_text','Professional Experience');
		$this->smarty->assign('small_header_text','Work History');
		$this->smarty->assign('page_content','toplevel/professional.tpl');
		$this->smarty->view();
	}
}

/* End of file professional.php */
/* Location: ./application/controllers/professional.php */