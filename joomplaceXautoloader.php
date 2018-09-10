<?php

class PlgSystemJoomPlaceXAutoloader extends Joomla\CMS\Plugin\CMSPlugin
{
    public function __construct($subject, array $config = array())
    {
        include_once JPATH_LIBRARIES . DIRECTORY_SEPARATOR . 'JoomPlaceX' . DIRECTORY_SEPARATOR . 'Loader.php';
        Joomplace\X\Loader::boot();
        parent::__construct($subject, $config);
    }
}