<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Controller_Common extends Controller_Template {
 
    public $template = 'my_template';
 
    public function before()
    {
        parent::before();
        View::set_global('title', 'Мой сайт');			
        View::set_global('description', 'Самый лучший сайт');
		$this->template->positionleft = true;
		$this->template->menu = View::factory('menu');
		$this->template->leftmenu = View::factory('leftmenu');
        $this->template->Heading1 = '';
        $this->template->Heading2 = '';
        $this->template->Heading3 = '';
        $this->template->Heading4 = '';
        $this->template->Heading5 = '';
        $this->template->Heading6 = '';
        $this->template->content = '';
    }
 
} // End Common
