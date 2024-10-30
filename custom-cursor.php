<?php
/*
Plugin Name: Custom Cursor
Plugin URI: http://herukurniawan.com/custom-cursor-bujanqworks-1-0-wordpress-plugin/
Description: simple custom cursor your blog from BujanQWorkS, you can change your cursor in accordance with the blogs you selected 
Author: heru kurniawan
Version: 1.0
Author URI: http://herukurniawan.com/
*/
function custom_cursor_load() 
{
	add_options_page("Custom Cursor BujanQWorkS", "Custom Cursor", 1, "Custom Cursor BujanQWorkS", "custom_cursor_form");
}
		
function custom_cursor_form()
{
	?>
	<div class="wrap">
	<?
	if($_POST['submit_custom_cursor']){
		$fp = fopen('../wp-content/plugins/custom-cursor-bujanqworks/config.txt', 'w');
		fwrite($fp, $_POST['cursor']); 
		fclose($fp);
	?>
	<div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
	<?} 
	$j = (int) custom_cursor_field("../wp-content/plugins/custom-cursor-bujanqworks/config.txt");?>
	<h2>Custom Cursor BujanQWorks</h2>
	<br />
	Custum Cursur BuajanQWorkS is a plugin that is very easy to install and use, for the first version of the features offered are very simple, you can change your cursor in accordance with the blogs you selected
	</br /></br />
	<form method="post" action="<? echo $_SERVER["REQUEST_URI"] ?>">
	<table>
		<tr>
			<? 
			$i = 1;
			while($i<7)
			{?>
				<td valign="top"><input type="radio" name="cursor" value="<? echo $i;?>" <? if($i==$j){?> checked="checked"<?}?>></td>
				<td><img src="<? bloginfo('url');?>/wp-content/plugins/custom-cursor-bujanqworks/<? echo $i;?>.gif"><td>
			<? $i++; } ?>	
		</tr>
		<tr>
			<? 
			while($i<13)
			{?>
				<td valign="top"><input type="radio" name="cursor" value="<? echo $i;?>" <? if($i==$j){?> checked="checked"<?}?>></td>
				<td><img src="<? bloginfo('url');?>/wp-content/plugins/custom-cursor-bujanqworks/<? echo $i;?>.gif"><td>
			<? $i++; } ?>	
		</tr>
		<tr>
			<? 
			while($i<19)
			{?>
				<td valign="top"><input type="radio" name="cursor" value="<? echo $i;?>" <? if($i==$j){?> checked="checked"<?}?>></td>
				<td><img src="<? bloginfo('url');?>/wp-content/plugins/custom-cursor-bujanqworks/<? echo $i;?>.gif"><td>
			<? $i++; } ?>	
		</tr>
		<tr>
			<? 
			while($i<25)
			{?>
				<td valign="top"><input type="radio" name="cursor" value="<? echo $i;?>" <? if($i==$j){?> checked="checked"<?}?>></td>
				<td><img src="<? bloginfo('url');?>/wp-content/plugins/custom-cursor-bujanqworks/<? echo $i;?>.gif"><td>
			<? $i++; } ?>	
		</tr>
		<tr>
			<? 
			while($i<31)
			{?>
				<td valign="top"><input type="radio" name="cursor" value="<? echo $i;?>" <? if($i==$j){?> checked="checked"<?}?>></td>
				<td><img src="<? bloginfo('url');?>/wp-content/plugins/custom-cursor-bujanqworks/<? echo $i;?>.gif"><td>
			<? $i++; } ?>	
		</tr>
		<tr>
			<td colspan="10"><p class="submit"><input type="submit" name="submit_custom_cursor" class="button-primary" value="Save Changes" ></p></td>
		</tr>
	</table>
	</form>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHLwYJKoZIhvcNAQcEoIIHIDCCBxwCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYCZqYyfPW97o6lWqjADoHT2NkBXySHdDEjhL0/N3sF0gWwCejXleIAV0ODeva3C6hwTm7qpdmwIUYMTdoP9ts/y2THlKItYcTR4Dymj66Hex5H0N3rWigw0JynoGyQABMszgqFjXJ90C5PMQGgbMzr2gVvnDx1oAPYW6LhyiR6zuDELMAkGBSsOAwIaBQAwgawGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQInmgRMdZYfsaAgYiLzmnopxYjONi0XXPZ250Rwaoqz0eZHX6z1yPvuHQzvwAGqbvhRTfmSxUlgzZKGXGmj8zxa5gp5QgoiaKmF7+M4Z6FaylRY1OQeHNDiG4Rj3l6O5r15HPIny9Zy4OvFvh7PtAGQIS2S+W4WYgTzPzkvlMUS/5KwNYhxwa6+dHX+E+0jbjDcXOIoIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMDkwOTI3MDUwMDU3WjAjBgkqhkiG9w0BCQQxFgQU0vjW10QNtWAk7Otrdmh9sUXrCEgwDQYJKoZIhvcNAQEBBQAEgYA27XbYxMmEhIRjeViweX8rB3Tm/eLADg6JxrQVpWlLWwp85TdN1pa1gESpH/6phzyVn8JE2m5Vi3Q/pXMNqRyqUmjePi900HLcG5HsVFJGq8ytdHTQXCtS9k+rubADIdTJ95+qTkwFhRDSXp5bPIJG2Ggt1Ri8/N0q9XApaFfavg==-----END PKCS7-----
	">
	<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>
	</div>
	<?
}

function custom_cursor_show()
{ 
	$j = (int) custom_cursor_field("wp-content/plugins/custom-cursor-bujanqworks/config.txt");
?>
<!-- Plugin "Custom Cursor BujanQWorks 1.0" By Heru Kurniawan -->
<style type="text/css">
html { height:100%; cursor: url('<? bloginfo('url');?>/wp-content/plugins/custom-cursor-bujanqworks/<? echo $j?>.gif'), auto; }
html a { cursor: url('<? bloginfo('url');?>/wp-content/plugins/custom-cursor-bujanqworks/<? echo $j?>.gif'), auto; }
</style>
<!-- end Plugin "Custom Cursor BujanQWorks 1.0" By Heru Kurniawan -->
<?
}

function custom_cursor_field($filename)
{
	$handle = fopen($filename, "r");
	$content = fread($handle, filesize($filename));
	fclose($handle);
	return $content;
}

add_action('wp_head', 'custom_cursor_show');
add_action('admin_menu', 'custom_cursor_load');
?>
