<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2022 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2013-2022
 * @author     Cliff Parnitzky
 * @package    TinyMceAdvancedList
 * @license    LGPL
 * @license    LGPL
 */

/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace TinyMceAdvancedList;

/**
* Class TinyMceAdvancedList
*
* Class to implement the HOOK for adding configs.
* @copyright  Cliff Parnitzky 2013-2022
* @author     Cliff Parnitzky
*/
class TinyMceAdvancedList {
	
	/**
	 * Adding config for output behavoir
	 */
	public function editTinyMcePluginLoaderConfig ($arrTinyConfig) {
		$contentCss = trim($arrTinyConfig["content_css"]);
		if (strlen($contentCss) > 3)
		{
			// remove enclosing quotes and ending comma
			$contentCss = substr($contentCss, 1, strlen($contentCss) - 3);
			
			// add a comma
			$contentCss .= ',';
		}
		$contentCss .= TL_PATH . '/system/modules/TinyMceAdvancedList/assets/tinymce_advlist.css';
		
		// put the value into the array
		
		$arrTinyConfig["content_css"] = '"' . $contentCss . '",';
		
		return $arrTinyConfig;
	}
}
 
?>