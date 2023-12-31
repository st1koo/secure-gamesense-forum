<?php

// Copyright (c) 2023 st1koo <https://github.com/st1koo>
 //
 // This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 // This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 // You should have received a copy of the GNU General Public License along with this program. If not, see <https://www.gnu.org/licenses/>. 

if (!defined('PUN') || !defined('PUN_PMS_NEW'))
	exit;

define('PUN_PMS_LOADED', 1);

define('PUN_ACTIVE_PAGE', 'pms_new');
require PUN_ROOT.'header.php';
?>
<div class="linkst">
	<div class="inbox crumbsplus">
		<ul class="crumbs">
			<li><a href="index.php"><?php echo $lang_common['Index'] ?></a></li>
			<li><span>»&#160;</span><a href="pmsnew.php"><?php echo $lang_pmsn['PM'] ?></a></li>
			<li><span>»&#160;</span><strong><?php echo $lang_pmsn[$pmsn_modul] ?></strong></li>
		</ul>
		<div class="pagepost"></div>
		<div class="clearer"></div>
	</div>
</div>
<?php

generate_pmsn_menu($pmsn_modul);

?>
	<div class="blockform">
		<h2><span><?php echo $lang_pmsn['Info'] ?></span></h2>
		<div class="box">
				<div id="infono" class="inform">
					<fieldset>
						<legend><?php echo $lang_pmsn['Attention'] ?></legend>
						<div class="infldset">
							<p><?php echo $lang_pmsn['Info close'] ?></p>
						</div>
					</fieldset>
				</div>
		</div>
	</div>
<?php

