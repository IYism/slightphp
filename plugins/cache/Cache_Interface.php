<?php
interface Cache_Interface{
	static function set($key,$value,$timestamp=-1);
	static function get($key);
	static function del($key);

}
?>