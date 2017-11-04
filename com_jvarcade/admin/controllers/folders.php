<?php
/**
 * @package		jVArcade
 * @version		2.15
 * @date		1-11-2017
 * @copyright   Copyright (C) 2017 jVArcade.com
 * @license		http://www.gnu.org/copyleft/gpl.html GNU/GPLv3 or later
 * @link		http://jvarcade.com
 */



// no direct access
defined('_JEXEC') or die;



class jvarcadeControllerFolders extends Joomla\CMS\MVC\Controller\AdminController {
    
    public function getModel($name = 'Folder', $prefix = 'jvarcadeModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);
        
        return $model;
    }
	
}