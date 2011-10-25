<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adventures extends CI_Controller {

	public function index()
	{
		$this->smarty->addOnload('$(".thumbnail").addClass("active");');
		$this->smarty->addOnload('$("a.view_full_size").fancybox();');
		$this->smarty->assign('large_header_text','Hobbies &amp; Adventures');
		$this->smarty->assign('small_header_text','Life-Long Exploration');
		$this->smarty->assign('page_content','toplevel/adventures.tpl');
		
		$this->smarty->addJSFile('/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack');
		$this->smarty->addStyleSheet('/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4');
		
		$this->smarty->view();
	}
}

/* End of file adventures.php */
/* Location: ./application/controllers/adventures.php */