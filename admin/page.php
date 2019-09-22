<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_page
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Access check: is this user allowed to access the backend of this component?
if (!JFactory::getUser()->authorise('core.manage', 'com_page')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}


// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('Page');


// Require helper file
JLoader::register('PageHelper', JPATH_COMPONENT . '/helpers/page.php');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();