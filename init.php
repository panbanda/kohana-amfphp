<?php

// API overflow
Route::set('amfphp.api', 'amfphp/gateway(.<type>)(/<uri>)', array('type' => 'amf|json|xmlrpc', 'uri' => '.*?'))
	->defaults(array(
		'controller' => 'amfphp',
		'action'     => 'gateway',
	));
	
// API media
Route::set('amfphp.media', 'amfphp/asset(/<filename>)', array('filename' => '.*?'))
	->defaults(array(
		'controller' => 'amfphp',
		'action'     => 'asset',
	));