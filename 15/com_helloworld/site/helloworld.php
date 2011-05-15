<?php defined('_JEXEC') or die('Restricted access');

$command = JRequest::getCmd('task', 'display');

// Check for a controller.task command
if (strpos($command, '.') !== false) {
	// Explode the controller.task command
	list($type, $task) = explode('.', $command);
    $path = JPATH_COMPONENT.DS.'controllers'.DS.$type.'.php';
    if (file_exists($path)) {
        require_once $path;
    } else {
        $controller = '';
    }
	// Reset the task without the contoller context.
	JRequest::setVar('task', $task);
} else if($type = JRequest::getVar('controller')) {
    $path = JPATH_COMPONENT.DS.'controllers'.DS.$type.'.php';
    if (file_exists($path)) {
        require_once $path;
    } else {
        $type = null;
    }
} else {
	// Base controller.
	$type	= null;
	$task	= $command;
	require_once (JPATH_COMPONENT.DS.'controller.php');
}

// Create the controller
$classname	= 'HelloController'.$type;
$controller = new $classname();

// Perform the Request task
$controller->execute(JRequest::getVar('task'));

// Redirect if set by the controller
$controller->redirect();

?>