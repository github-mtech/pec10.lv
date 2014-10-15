<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Welcome extends Controller_Template  {

	public $template = 'web/tmp/html';
	
	public function before()
	{
		parent::before();
		
		I18n::lang(Request::current()->param('lang'));
		I18n::init(array('rawr'));
		
		
		
		$plugins = Kohana::$config->load('plugins')->get('plugins');
		$css	 = array(
			'/media/css/base.css',
			//'lnk22.css',
		);
		
		$js 	= array(
			//'link11.js',
			//'link33.js',
		);
		
		
		
		//var_dump(array($plugins,$css,$js));
		
		
		
		$this->template->plugins = $plugins;
		$this->template->css = $css;
		$this->template->js = $js;
		
		
		
		
		
		
		
	}
	
	public function action_index()
	{
		//var_dump(1);
	}
	
	public function after()
	{
	    parent::after();
	    //var_dump('lol');
	    I18n::add();
	    
	    
	}

} // End Home