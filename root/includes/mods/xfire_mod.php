<?php
/**
*
* @author Prosk8er (Tyler) prosk8er@gotskillslounge.com
* @package Xfire Mod
* @version $Id: xfire_mod.php 104 2011-08-26 12:30:00Z Prosk8er $
* @copyright (c) 2011 Prosk8er ( http://www.gotskillslounge.com/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// define constants used in user cp
if (!defined('XFIRE_SHADOW'))
{
	define('XFIRE_SHADOW', 1);
}
if (!defined('XFIRE_COMBAT'))
{
	define('XFIRE_COMBAT', 2);
}
if (!defined('XFIRE_SCIFI'))
{
	define('XFIRE_SCIFI', 3);
}
if (!defined('XFIRE_FANTASY'))
{
	define('XFIRE_FANTASY', 4);
}
if (!defined('XFIRE_WOW'))
{
	define('XFIRE_WOW', 5);
}
if (!defined('XFIRE_DEFAULT'))
{
	define('XFIRE_DEFAULT', 6);
}
if (!defined('XFIRE_BG'))
{
	define('XFIRE_BG', 'bg');
}
if (!defined('XFIRE_SH'))
{
	define('XFIRE_SH', 'sh');
}
if (!defined('XFIRE_CO'))
{
	define('XFIRE_CO', 'co');
}
if (!defined('XFIRE_SF'))
{
	define('XFIRE_SF', 'sf');
}
if (!defined('XFIRE_OS'))
{
	define('XFIRE_OS', 'os');
}
if (!defined('XFIRE_WO'))
{
	define('XFIRE_WO', 'wow');
}