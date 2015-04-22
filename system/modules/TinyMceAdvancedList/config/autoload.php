<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package TinyMceAdvancedList
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'TinyMceAdvancedList',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'TinyMceAdvancedList\TinyMceAdvancedList' => 'system/modules/TinyMceAdvancedList/classes/TinyMceAdvancedList.php',
));
