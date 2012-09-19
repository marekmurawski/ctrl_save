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
if (!defined('IN_CMS')) { exit(); }

Plugin::setInfos(array(
		'id'          => 'ctrl_save',
		'title'       => 'Ctrl-Save and Continue',
		'description' => __('Supports "Ctrl-S" keystroke to save form and continue editing.'),
		'version'     => '0.0.1',
			'license'     => 'GPL',
			'author'      => 'Marek Murawski',
		'website'     => 'http://marekmurawski.pl/',
		'update_url'  => 'http://marekmurawski.pl/static/wolfplugins/plugin-versions.xml',
		'require_wolf_version' => '0.7.3' // 0.7.5SP-1 fix -> downgrading requirement to 0.7.3
));
