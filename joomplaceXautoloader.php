<?php
/**
 * @package     JoomPlaceX
 * @subpackage  System.autoloader
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

class PlgSystemJoomPlaceXAutoloader extends JPlugin
{
    public function onAfterInitialise()
    {
        JLoader::registerNamespace('JoomPlaceX',
            JPATH_LIBRARIES . DIRECTORY_SEPARATOR . 'JoomPlaceX', false, false,
            'psr4');
    }
}
