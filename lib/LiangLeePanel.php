<?php
/* LiangLee Zhuye
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @package Liang Lee Zhuye
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @File LiangLeeCpanel.php 
 */
 

function LiangLeeCpanel_lib(){
/**
* Setting up global Varables.
* @global $Leepanel_logo,$Leepanellogo,$logo
* @ascess public
**/
global $Leepanel_logo;
global $Leepanellogo;
global $Logo;

if($Leepanel_logo = elgg_get_plugin_setting("Leepanel_logo", "LiangLeePanel")){
	$Leepanellogo = $Leepanel_logo;
  }

if (!elgg_get_plugin_setting('Leepanel_logo', 'LiangLeePanel')) {
   $base = elgg_get_site_url().'mod/LiangLeePanel/media/';
   $Logo = $base.'logo.jpg';
  } else {
   $Logo = $Leepanellogo;
  }  
}