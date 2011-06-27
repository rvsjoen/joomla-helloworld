<?php defined('_JEXEC') or die;
/**
 * @version		$Id$
 * @package		HelloWorld
 * @subpackage	tpl_helloworld
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<jdoc:include type="head" />
	</head>
	<body>
		<jdoc:include type="modules" name="top" style="none" />
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</body>
</html>
