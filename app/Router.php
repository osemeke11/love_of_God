<?php

namespace Church;

class Router
{
	public $url;
	static public $title;
	static public $key;
	static public $value;
	
	function __construct($array=[])
	{
		$this->url = Router::removeQuery($array[1]);
		if($this->url == "" || $this->url == 'index'){
			require public_path('index.php');
		}
		else{
			$this->url = Router::removeQuery($array[1]) . ".php";
			if(file_exists(public_path($this->url))){
				Router::$title = Router::removeQuery($array[1]) ? Router::removeQuery($array[1]) : "";
				Router::$key = (count($array) > 2) ? Router::removeQuery($array[2]) : "";
				Router::$value = (count($array) > 3) ? Router::removeQuery($array[3]) : "";
				require_once public_path($this->url);
			}else{
				require_once public_path('404.php');
			}
		}
	}

	// Check if Query String is available, Then Remove it
	static function removeQuery($str){
		if(strpos($str, "?") !== false){
			$strCount = strpos($str, "?");
			$str = substr($str, 0, $strCount);
			return $str;
		}else{
			return $str;
		}
	}

}