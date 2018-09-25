<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.joomplaceXautoloader
 * @copyright   Copyright (C) 2005 - 2017 JoomPlace. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Joomla! joomplaceXautoloader Plugin.
 * Loads the JoomPlaceX library.
 * @author	JoomPlace Team
 */
defined('_JEXEC') or die;

class PlgSystemJoomplacexautoloaderInstallerScript
{
	public function postflight($type, $parent)
	{
        if (strtolower($type) === 'install')
        {
            $db = \JFactory::getDbo();
            $query = $db->getQuery(true);

            $fields = array(
                $db->quoteName('enabled') . ' = ' . $db->quote(1),
                $db->quoteName('ordering') . ' = ' . $db->quote(0)
            );

            $conditions = array(
                $db->quoteName('element') . ' = ' . $db->quote('joomplaceXautoloader'),
                $db->quoteName('type') . ' = ' . $db->quote('plugin')
            );

            $query->update($db->quoteName('#__extensions'))->set($fields)->where($conditions);

            $db->setQuery($query);
            $db->execute();
        }
	}
}