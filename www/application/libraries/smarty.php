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

	function __construct()
	{
		parent::__construct();
		
		$this->template_dir =  APPPATH . 'views/';
		$this->compile_dir =  APPPATH . 'cache/'; //use CIÕs cache folder
		
		//echo(file_get_contents($this->template_dir.'/template.tpl'));exit();

		// Assign CodeIgniter object by reference to CI
		if ( method_exists( $this, 'assignByRef') )
		{
			$ci =& get_instance();
			$this->assignByRef("ci", $ci);
		}

		log_message('debug', "Smarty Class Initialized");
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
	function view($template='template.tpl', $data = array(), $return = FALSE)
	{
		foreach ($data as $key => $val)
		{
			$this->assign($key, $val);
		}
		
		if ($return == FALSE)
		{
			//die("template = $this->template_dir $template ");
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
		die("template = $template");
			return $this->fetch($this->template_dir.'/'.$template);
		}
	}
}
// END Smarty Class
