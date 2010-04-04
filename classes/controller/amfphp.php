<?php defined('SYSPATH') or die('No direct script access.');

class Controller_AMFPHP extends Controller
{
	public function action_index()
	{
		$this->action_gateway();
	}
	
	public function action_gateway()
	{
		$service_type = Request::instance()->param('type');
		
		switch ($service_type)
		{
			case "xmlrpc":
				require_once Kohana::find_file('vendor', 'amfphp/xmlrpc');
				break;
			case "json":
				require_once Kohana::find_file('vendor', 'amfphp/json');
				break;
			case "amf":
			default: 
				require_once Kohana::find_file('vendor', 'amfphp/gateway');
		}
	}
	
	public function action_browser()
	{
		if (Kohana::config('amfphp.disable_browser'))
		{
			$this->request->redirect('/');
		
			return;
		}
		
		echo View::factory('browser/index');
	}
	
	public function action_asset()
	{
		$asset = Request::instance()->param('filename');
		
		$file = MODPATH . 'amfphp/assets/' . $asset;
		
		if (!is_file($file))
		{
			throw new Kohana_Exception('Asset does not exist');
		}
		
		$this->request->headers['Content-Type'] = File::mime($file);
		$this->request->headers['Content-Length'] = filesize($file);
		
		$this->request->send_headers();
		
		$content = @fopen($file, 'rb');
		if ($content)
		{
			fpassthru($content);
			exit;
		}
	}
}

