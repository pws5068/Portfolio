<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->smarty->assign('large_header_text','Mobile &amp; Web Developer');
		$this->smarty->assign('small_header_text','San Francisco');
		$this->smarty->assign('page_content','toplevel/home.tpl');
			
		$this->smarty->view('template.tpl');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */