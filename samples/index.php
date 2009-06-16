<?php
/**
 * sample to test
 *
 * http://localhost/samples/index.php/zone/default/entry/a/b/c
 * http://localhost/samples/index.php/zone-default-entry-a-b-c.html
 *
 */
/* use static */
//{{{
require_once("../SlightPHP.php");
SlightPHP::setDebug(true);
//var_dump(SlightPHP::getDebug());
//SlightPHP::setSplitFlag("-_");
//var_dump(SlightPHP::getSplitFlag());
SlightPHP::setAppDir(".");
//var_dump(SlightPHP::getAppDir());
SlightPHP::setDefaultZone("zone");
//var_dump(SlightPHP::getDefaultzone());
SlightPHP::setDefaultClass("default");
//var_dump(SlightPHP::getDefaultClass());
SlightPHP::setDefaultMethod("entry");
//var_dump(SlightPHP::getDefaultMethod("entry"));
SlightPHP::setPluginsDir("../plugins");
//var_dump(SlightPHP::getPluginsDir());
//var_dump(SlightPHP::loadFile("../plugins/SError.class.php"));
//var_dump(SlightPHP::loadPlugin("SSmarty"));
if(($r=SlightPHP::run())===false){
	//redirect to 404
	die("ERROR ENTRY");
}else{
	echo $r;
}
//}}}


/*
$slight=new SlightPHP;
$slight->setDefaultZone("zone");
$slight->setAppDir(".");
$slight->setPluginsDir("../plugins");
$slight->loadPlugin("SError");
if($slight->run()===false){
	die("ERROR ENTRY");
}
*/
?>