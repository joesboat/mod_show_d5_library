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

class modshow_d5_libraryHelper
{
static function setup_folder($folder){
	// Create the folder if it does not exist
	$abs_folder = JPATH_BASE.'/'.$folder ;
	if (file_exists($abs_folder)){		// JPATH_BASE.'/'.$folder)){
		return $abs_folder;
	} else {
		if (mkdir($abs_folder,0755)) 
			return $folder ;
	}
	// Return a known folder name
	return false ;
}
static function setup_urlbase($folder){
	$site_url = "http://".$_SERVER['SERVER_NAME'].$_SERVER['CONTEXT_PREFIX'];
	// Build a url that references the $folder
	return $site_url . "/" . $folder ;
}
static function setup_library($type){
	$lib_names = array(	'min'		=>"Meeting Minutes",
						'job'		=>"Job Descriptions",
						'policy'	=>"RSPS Policy");
	return $lib_names[$type] ;	
}
static function get_file_list($folder){
	$ary = array();
	// Scan to identify the iles in $folder 
	$dir = new DirectoryIterator($folder);
	// Build an anchor element to display each file. 
	foreach ($dir as $fileinfo) {
	    if ($fileinfo->isFile()) {
	        $ary[] = $fileinfo->getFilename();
	    }
	}
	return $ary;
}
}
