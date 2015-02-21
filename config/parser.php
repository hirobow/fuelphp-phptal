<?php

return array(


	// Phptal ( http://phptal.org/manual/en/ )
	// ------------------------------------------------------------------------
	'View_Phptal'   => array(
		'include'   => APPPATH.'vendor'.DS.'PHPTAL'.DS.'classes'.DS.'PHPTAL.php',
		'auto_encode' => true,
		'cache_dir' => APPPATH.'cache'.DS.'PHPTAL'.DS,
		'cache_lifetime' => 0,
		'encoding' => 'UTF-8',
		'output_mode' => 'PHPTAL::XHTML',
		'template_repository' => '',
		'force_reparse' => false,
	),

);
