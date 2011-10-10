<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->smarty->assign('large_header_text','Contact Me');
		$this->smarty->assign('small_header_text','');
		$this->smarty->assign('page_content','toplevel/contact.tpl');
		$this->smarty->view();
	}
}

/* End of file adventures.php */
/* Location: ./application/controllers/adventures.php */