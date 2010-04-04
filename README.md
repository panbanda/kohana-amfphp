# Kohana 3 AMFPHP Module

This module integrates AMFPHP 1.9 (http://www.amfphp.org/) into Kohana 3.x

The current version has been added on Kohana 3.0.4

## Installation

Step 0: Download this module!

To get it from git execute the following command in the root of your project:

	$ git submodule add git://github.com/jylinman/kohana-amfphp.git amfphp

Step 1: Enable this module in your bootstrap file

	/**
	 * Enable modules. Modules are referenced by a relative or absolute path.
	 */
	Kohana::modules(array(
		'amfphp'		=> MODPATH.'amfphp'	 	 // AMFPHP integration
		// 'database'   => MODPATH.'database',   // Database access
		// 'image'      => MODPATH.'image',      // Image manipulation
		// 'kodoc'      => MODPATH.'kodoc',      // Kohana documentation
		// 'orm'        => MODPATH.'orm',        // Object Relationship Mapping (not complete)
		// 'pagination' => MODPATH.'pagination', // Paging of results
		// 'paypal'     => MODPATH.'paypal',     // PayPal integration (not complete)
		// 'todoist'    => MODPATH.'todoist',    // Todoist integration
		// 'unittest'   => MODPATH.'unittest',   // Unit testing
		// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
		));

Step 2: Visit http://yourdomain.com/amfphp/browser to view your AMFPHP service browser. 

## Usage

	- You can access the different types of responses via URLs:
		- AMF: http://localhost/amfphp/gateway.amf
		- JSON: http://localhost/amfphp/gateway.json/{METHOD}/{PARAM_1}/{PARAM_2}/...
		- XML-RPC: http://localhost/amfphp/gateway.xmlrpc
		
	- Your service scripts go in this directory (for now, working on changing location): MODPATH/amfphp/vendor/amfphp/services/