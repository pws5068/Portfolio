<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Smarty Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Smarty
 * @author		Kepler Gelotte
 * @link		http://www.coolphptools.com/codeigniter-smarty
 */
require_once(BASEPATH.'smarty/Smarty.class.php' );

class CI_Smarty extends Smarty {

	private $jquery_onload;

	function __construct()
	{
		parent::__construct();
		
		$this->template_dir =  APPPATH . 'views/';
		$this->compile_dir =  APPPATH . 'cache/'; //use CIÕs cache folder

		// Assign CodeIgniter object by reference to CI
		if ( method_exists( $this, 'assignByRef') )
		{
			$ci =& get_instance();
			$this->assignByRef("ci", $ci);
		}

		$this->jquery_onload = '';
	}

	/**
	 *  Parse a template using the Smarty engine
	 *
	 * This is a convenience method that combines assign() and
	 * display() into one step. 
	 *
	 * Values to assign are passed in an associative array of
	 * name => value pairs.
	 *
	 * If the output is to be returned as a string to the caller
	 * instead of being output, pass true as the third parameter.
	 *
	 * @access	public
	 * @param	string
	 * @param	array
	 * @param	bool
	 * @return	string
	 */
	function addOnload($onload)
	{
		$this->jquery_onload .= $onload;
	}
	function view($template='template.tpl', $data = array(), $return = FALSE)
	{
		if(ENVIRONMENT == 'development')
		{
			$this->caching = 0;
		}
		foreach ($data as $key => $val)
		{
			$this->assign($key, $val);
		}
		
		$this->assign('jquery_onload',$this->jquery_onload);
		
		if ($return == FALSE)
		{
			$CI =& get_instance();
			if (method_exists( $CI->output, 'set_output' ))
			{
				$CI->output->set_output($this->fetch($this->template_dir.'/'.$template) );
			}
			else
			{
				$CI->output->final_output = $this->fetch($this->template_dir.'/'.$template);
			}
			return;
		}
		else
		{
			return $this->fetch($this->template_dir.'/'.$template);
		}
	}
}
// END Smarty Class
