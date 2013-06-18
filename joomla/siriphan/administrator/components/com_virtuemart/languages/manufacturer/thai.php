<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'UTF-8',
	'PHPSHOP_MANUFACTURER_LIST_LBL' => 'โรงงาน',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => 'ชื่อโรงงาน',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => 'ระบุรายละเอียด',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => 'หมวดโรงงาน',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'อีเมล์',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => 'หมวดโรงงาน',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => 'ชื่อหมวด',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => 'รายละเอียด',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => 'โรงงาน',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => 'แบบฟอร์มหมวดโรงงาน',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => 'ระบุข้อมูล',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => 'ชื่อหมวด',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => 'รายละเอียด'
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>