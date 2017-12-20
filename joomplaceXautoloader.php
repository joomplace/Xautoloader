<?php
/**
 * @package     JoomPlaceX
 * @subpackage  System.Autoloader
 *
 * @copyright   Copyright (C) 2005 - 2017 JoomPlace Team, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

class PlgSystemJoomPlaceXAutoloader extends Joomla\CMS\Plugin\CMSPlugin
{
    public function __construct($subject, array $config = array())
    {
        include_once JPATH_LIBRARIES . DIRECTORY_SEPARATOR . 'JoomPlaceX'. DIRECTORY_SEPARATOR . 'Loader.php';
        Joomplace\X\Loader::boot();
        parent::__construct($subject, $config);
    }
}