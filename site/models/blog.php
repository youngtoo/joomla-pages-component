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
 * HelloWorld Model
 *
 * @since  0.0.1
 */
class PageModelBlog extends JModelItem
{
	/**
	 * @var string message
	 */
	protected $posts;

	/**
	 * Get the message
         *
	 * @return  string  The message to be displayed to the user
	 */
	public function getMsg()
	{
		if (!is_array($this->posts))
		{
			$this->posts = array();
		}

		if (!isset($this->posts[$id]))
		{
			
            $db = JFactory::getDbo();

            // Create a new query object.
            $query = $db->getQuery(true);
            
            // Select all records from the user profile table where key begins with "custom.".
            // Order it by the ordering field.
            $query->select($db->quoteName(array('title', 'content', 'featured')));
            $query->from($db->quoteName('__posts'));
            
            // Reset the query using our newly populated query object.
            $db->setQuery($query);
            
            // Load the results as a list of stdClass objects (see later for more options on retrieving data).
            $results = $db->loadObjectList();	}

		return $this->results;
    }
    
    /**
	 * Method to get a table object, load it if necessary.
	 *
	 * @param   string  $type    The table name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  JTable  A JTable object
	 *
	 * @since   1.6
	 */
	public function getTable($type = 'post', $prefix = 'PageTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
}