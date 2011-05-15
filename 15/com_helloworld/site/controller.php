<?php 

jimport('joomla.application.component.controller');

class HelloController extends JController 
{	
	function display(){
		echo "Hello World!";
	}
}

?>