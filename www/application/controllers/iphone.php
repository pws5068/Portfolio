<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Iphone extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->smarty->addOnload("$('#screens').cycle({ fx: 'scrollLeft' });");
	}
	public function storyboarder()
	{
		$this->smarty->assign('large_header_text','StoryBoarder');
		$this->smarty->assign('small_header_text','Iphone Development');
		$this->smarty->assign('page_content','iphone/storyboarder.tpl');
		$this->smarty->view();
	}
	public function lonely_planet_postcards()
	{
		$this->smarty->assign('large_header_text','Lonely Planet Postcards');
		$this->smarty->assign('small_header_text','Iphone Development');
		$this->smarty->assign('page_content','iphone/lonely_planet_postcards.tpl');
		$this->smarty->view();
	}
	public function speedcountry()
	{
		$this->smarty->assign('large_header_text','SpeedCountry Mobile');
		$this->smarty->assign('small_header_text','Iphone Development');
		$this->smarty->assign('page_content','iphone/speedcountry.tpl');
		$this->smarty->view();
	}
}

/* End of file iphone.php */
/* Location: ./application/controllers/iphone.php */