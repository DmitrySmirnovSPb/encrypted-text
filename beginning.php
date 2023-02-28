<?php

	mb_internal_encoding('UTF-8');
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
  
	$sep = PATH_SEPARATOR;
	set_include_path(get_include_path().$sep.$_SERVER['DOCUMENT_ROOT'].'/core'.$sep.$_SERVER['DOCUMENT_ROOT'].'/lib'.$sep.$_SERVER['DOCUMENT_ROOT'].'/classes'.$sep.$_SERVER['DOCUMENT_ROOT'].'/validator'.$sep.$_SERVER['DOCUMENT_ROOT'].'/controllers'.$sep.$_SERVER['DOCUMENT_ROOT'].'/modules');
	spl_autoload_extensions('_class.php');
	spl_autoload_register();
  
  if(!session_id()) session_start();

?>