<?php defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class HelloWorldController extends JController 
{	
	function display(){
		echo "Hello Admins!";
	}
}