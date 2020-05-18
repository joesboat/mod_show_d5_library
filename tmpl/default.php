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
?>
	<h3>
		<?php echo $lib_name; ?> Library  
	</h3>
	<ul>
<?php
	foreach ($files as $file){
		$url = $urlbase . "/" . $file;
?>
	<p>
		<li>
			<a href="<?php echo $url; ?>"><?php echo $file; ?></a>
		</li>	
	</p>
<?php		
}
?>
</ul>