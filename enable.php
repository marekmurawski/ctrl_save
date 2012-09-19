<?php
/*
 * Wolf CMS - Content Management Simplified. <http://www.wolfcms.org>
 * Copyright (C) 2008-2010 Martijn van der Kleijn <martijn.niji@gmail.com>
 * 
 * Ctrl-S support plugin for Wolf CMS
 * Supports "CTRL-S" keystroke to save form and continue editing.
 *  
 * @package Plugins
 * @subpackage ctrl_save
 *
 * @author Marek Murawski <http://marekmurawski.pl>
 * @copyright Marek Murawski, 2012
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */

/* Security measure */
if (!defined('IN_CMS')) {
	exit();
}


Flash::set('success', __('Successfully activated ctrl_save plugin!'));
exit();
?>