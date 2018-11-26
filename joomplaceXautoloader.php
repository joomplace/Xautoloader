<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.joomplaceXautoloader
 * @copyright   Copyright (C) 2005 - 2018 JoomPlace. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Joomla! joomplaceXautoloader Plugin.
 * Loads the JoomPlaceX library.
 * @author	JoomPlace Team
 */
defined('_JEXEC') or die;

class PlgSystemJoomPlaceXAutoloader extends Joomla\CMS\Plugin\CMSPlugin
{
    public function __construct($subject, array $config = array())
    {
        include_once JPATH_LIBRARIES . DIRECTORY_SEPARATOR . 'JoomPlaceX' . DIRECTORY_SEPARATOR . 'Loader.php';
        Joomplace\X\Loader::boot();
        parent::__construct($subject, $config);
    }
}
