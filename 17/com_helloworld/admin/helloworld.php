<?php defined('_JEXEC') or die;
/**
 * @version		$Id$
 * @package		HelloWorld
 * @subpackage	Component
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html
 */

jimport('joomla.application.component.controller');

$controller = JController::getInstance('HelloWorld');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
