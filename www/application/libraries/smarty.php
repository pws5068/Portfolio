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
require(BASEPATH.'smarty/Smarty.class.php' );
require(APPPATH.'helpers/site.php');

class CI_Smarty extends Smarty {

	private $error;
	private $success;
	private $jquery_onload;
	private $stylesheets;
	private $js_files;

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
		$this->stylesheets = array();
		$this->js_files = array();
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
	function setSuccess($success)
	{
		if(strlen($this->success) > 0)
		{
			$this->success .= '<br>';
		}
		
		$this->success .= $success;
	}
	function setError($error)
	{
		if(strlen($this->error) > 0)
		{
			$this->error .= '<br>';
		}
		
		$this->error .= $error;
		
		//$this->success = ''; // Clear former successes?
	}
	function setHeader($large_text,$small_text='')
	{
		$this->assign('large_header_text',$large_text);
		$this->assign('small_header_text',$small_text);
	}
	function setContent($template)
	{
		$this->assign('page_content',$template.'.tpl');
	}
	function addStylesheet($stylesheet_path)
	{
		$this->stylesheets[] = $stylesheet_path;
	}
	function addJSFile($file_path)
	{
		$this->js_files[] = $file_path;
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
		
		$this->assign('error_dialog',$this->error);
		$this->assign('success_dialog',$this->success);
		$this->assign('jquery_onload',$this->jquery_onload);
		$this->assign('random_quote',getRandomQuote());
		$this->assign('stylesheets',$this->stylesheets);
		$this->assign('js_files',$this->js_files);
		
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
