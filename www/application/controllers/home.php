<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->smarty->assign('header_text','Recent Projects &amp; Tinkering');
		$this->smarty->assign('page_content','home.tpl');
		$this->smarty->view('template.tpl');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */