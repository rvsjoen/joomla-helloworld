<?php defined('_JEXEC') or die;
/**
 * @version		$Id$
 * @package		HelloWorld
 * @subpackage	plg_helloworld
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

jimport('joomla.event.plugin');

class plgSystemHelloWorld extends JPlugin {

	public function __construct(& $subject, $config){
		parent::__construct($subject, $config);
		$this->loadLanguage();
	}

	function onAfterInitialise(){
		//TODO Do work here
	}
}
