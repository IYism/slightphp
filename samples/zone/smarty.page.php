<?php
class zone_smarty extends SGui{
	function pageEntry($inPath){
		$params['key']="value";
		$params['date'] = date("Y-m-d H:i:s");
		return $this->render("smarty.test.tpl",$params);
	}
	function pagePart($inPath){
		echo "PART";
		$params['key']="value";
		$params['date'] = date("Y-m-d H:i:s");
		return $this->render("smarty.test.part.tpl",$params);
	}
}
?>