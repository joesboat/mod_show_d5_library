<?php
/**
* @package Show D5 Library
* @author Joseph P. Gibson
* @website joesboat.org
* @email joe@joesboat.org
* @copyright Copyright (C) 2017 Joseph P. Gibson. All rights reserved.
* @license GNU General Public License version 2 or later; see LICENSE.txt
**/

// no direct access
defined('_JEXEC') or die('Restricted access');
require_once(dirname(__FILE__).DS.'helper.php');
$lib_name = modshow_d5_libraryHelper::setup_library($params->get('doc_type'));

$abs_folder = modshow_d5_libraryHelper::setup_folder($params->get('lib_folder'));
$urlbase = modshow_d5_libraryHelper::setup_urlbase($params->get('lib_folder'));

$files = modshow_d5_libraryHelper::get_file_list($abs_folder,$urlbase);

require(JModuleHelper::getLayoutPath('mod_show_d5_library',$params->get('layout','default')));