<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	public function speedcountry()
	{
		// $this->smarty->populateGallery('speedcountry');
		$this->smarty->setHeader('SpeedCountry','Motorist Community');
		$this->smarty->setContent('web/speedcountry');
		
		$this->smarty->view();
	}
	public function sponsorpaintball()
	{
		$this->smarty->setHeader('SponsorPaintball','Enthusiast Community');
		$this->smarty->setContent('web/sponsorpaintball');
		
		$this->smarty->view();
	}
	public function swpalandlords()
	{
		$this->smarty->setHeader('SWPA Landlords','Tenant Management Portal');
		$this->smarty->setContent('web/swpalandlords');
		
		$this->smarty->view();
	}
	public function rsncorp()
	{
		$this->smarty->setHeader('Rock Sport Nation','Penn State Project');
		$this->smarty->setContent('web/rsncorp');
		
		$this->smarty->view();
	}
}

/* End of file iphone.php */
/* Location: ./application/controllers/iphone.php */