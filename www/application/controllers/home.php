<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->smarty->addOnload('$("#toplevel_home").addClass("active");');
		$this->smarty->assign('large_header_text','Mobile &amp; Web Developer');
		$this->smarty->assign('small_header_text','San Francisco, CA');
		$this->smarty->assign('page_content','toplevel/home.tpl');
			
		$this->smarty->view();
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */