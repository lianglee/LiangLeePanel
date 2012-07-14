<?php
/* LiangLee Panel
 * FrameWork for Liang Lee Plugins
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package LiangLeeFramework
 * @subpackage LiangLee Panel
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File settings.php
 */
/**
* Get Veersion
**/
$plug_ver = LiangLee_version('LiangLee_metatags');
$plug_rel = LiangLee_release('LiangLee_metatags');


/**
* Load Languages
**/
$liang_lee_Zhuye_copytights = elgg_echo('lianglee:copyr:12');
$lleesettings = elgg_echo('llee:panel:settings');
$liang_lee_logo_label = elgg_echo('llee:panel:logo');
/**
* Save settings
**/
$liang_lee_logo = elgg_view("input/text", array(
"name" => "params[Leepanel_logo]", 
"placeholder" => "http://www.yourwebsite.com/logo.jpg",
"value" => $vars['entity']->Leepanel_logo));	
		
/**
* Setting Page
**/
$settings = <<<__HTML

    <h3>$lleesettings</h3>
    <div>
		<p><i>$liang_lee_logo_label</i><br>$liang_lee_logo</p>
		<hr>
		<p><i>$liang_lee_Zhuye_copytights</i>

		<p>Release: $plug_rel</p>
		<p>Version: $plug_ver</p>
    </div>
    
</div>
__HTML;
echo $settings;