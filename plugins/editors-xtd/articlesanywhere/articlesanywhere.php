<?php
/**
 * @package         Articles Anywhere
 * @version         6.0.4
 * 
 * @author          Peter van Westen <info@regularlabs.com>
 * @link            http://www.regularlabs.com
 * @copyright       Copyright © 2017 Regular Labs All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

defined('_JEXEC') or die;

if (!is_file(JPATH_LIBRARIES . '/regularlabs/autoload.php'))
{
	return;
}

require_once JPATH_LIBRARIES . '/regularlabs/autoload.php';

/**
 * Button Plugin that places Editor Buttons
 */
class PlgButtonArticlesAnywhere
	extends \RegularLabs\Library\EditorButton
{
	var $folder = __DIR__;
}
