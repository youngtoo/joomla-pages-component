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

/**
 * HTML View class for the page Component
 *
 * @since  0.0.1
 */
class PageViewBlog extends JViewLegacy
{
	/**
	 * Display the Page view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Assign data to the view

		$this->posts = $this->get('Posts');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

			return false;
		}
		
		$app    = JFactory::getApplication();
		$pathway = $app->getPathway();
		$pathway->addItem('Blog', '/blog');

		// Display the view
		parent::display($tpl);
	}
}