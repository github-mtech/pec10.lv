<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Home extends Controller_Template  {

	public $template = 'web/tmp/html';
	
	public function before()
	{
		parent::before();
		
		I18n::lang(Request::current()->param('lang'));
		I18n::init(array('home'));
		
		
		
		$plugins = Kohana::$config->load('plugins')->get('plugins');
		$css	 = array(
			//'/media/css/main.css',
			'/media/css/base.css',
			
		
		);
		
		$js 	= array(
			'/media/js/main.js',
			
		);
		
		
		
		//var_dump(array($plugins,$css,$js));
		
		
		$this->template->content = array();
		$this->template->plugins = $plugins;
		$this->template->css = $css;
		$this->template->js = $js;
		
		
		
		
		
		
		
	}
	
	public function action_index()
	{
		$this->template->content = array(
			View::factory('web/section/promotion'),
			View::factory('web/section/info'),
			View::factory('web/section/add'),
			View::factory('web/section/contacts'),
			//View::factory('web/section/unknown'),
		);
	}
	
	public function after()
	{
	    parent::after();
	    //var_dump('lol');
	    I18n::add();
	    
	    
	}

} // End Home