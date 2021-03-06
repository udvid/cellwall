<?php
/**
* Configurations to be used by the framework and application
*/

class Config
{
	/*-----------------------------------------------------------------------------------------------------------------*/
	/**
	* Constants to set various component paths
	*/
	const IMAGE_PATH = "/Assets/Images/";
	/*-----------------------------------------------------------------------------------------------------------------*/
	const CSS_PATH = "/Frontend/Styles/";
	/*-----------------------------------------------------------------------------------------------------------------*/
	const JS_PATH = "/Frontend/Scripts/";
	/*-----------------------------------------------------------------------------------------------------------------*/
	const MAIN_VIEW_PATH = "/Application/Views/Main/";
	/*-----------------------------------------------------------------------------------------------------------------*/
	const MISC_VIEW_PATH = "/Application/Views/Misc/";
	/*-----------------------------------------------------------------------------------------------------------------*/
	const ERROR_VIEW_PATH = "/Application/Views/Error/";
	/*-----------------------------------------------------------------------------------------------------------------*/
	const PARTIAL_VIEW_PATH = "/Application/Views/Partial/";
	/*-----------------------------------------------------------------------------------------------------------------*/
	const EXTRA_PATH = "/Application/Views/Extra/";
	/*-----------------------------------------------------------------------------------------------------------------*/
	const ERROR_FILE = "404.php";
	/*-----------------------------------------------------------------------------------------------------------------*/
	const AJAX_ERROR_FILE = "Ajax404.php";
	
	/*-----------------------------------------------------------------------------------------------------------*/
	private function __construct(){}
	private function __clone(){}
	/*-----------------------------------------------------------------------------------------------------------*/
}
?>