<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HelloWorld component helper.
 *
 * @param   string  $submenu  The name of the active view.
 *
 * @return  void
 *
 * @since   1.6
 */
abstract class PageHelper extends JHelperContent
{
	/**
	 * Configure the Linkbar.
	 *
	 * @return Bool
	 */

	public static function addSubmenu($submenu) 
	{
		JHtmlSidebar::addEntry(
			JText::_('Dashboard'),
			'index.php?option=com_page',
			$submenu == 'Dashboard'
        );
        
        JHtmlSidebar::addEntry(
			JText::_('Posts'),
			'index.php?option=com_page&view=posts',
			$submenu == 'Posts'
		);

		JHtmlSidebar::addEntry(
			JText::_('Categories'),
			'index.php?option=com_categories&view=categories&extension=com_page',
			$submenu == 'categories'
		);

		// Set some global property
		$document = JFactory::getDocument();

		if ($submenu == 'categories') 
		{
			$document->setTitle(JText::_('Pages Category'));
		}
	}
}