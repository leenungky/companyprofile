<?php	    
	$data = array();
	if (env('APP_ENV')=="production"){	
		$data = [						
			'api_host' => "https://internalapi.popbox.asia", 
			"token"=> "767ae89fec88a53dbb465adb4d0c76c294a8a28e"
		];
	}else if (env('APP_ENV')=="staging"){
       $data = [						
			'api_host' => "http://api-dev.popbox.asia", 
			"token"=> "767ae89fec88a53dbb465adb4d0c76c294a8a28e"
		];
	}else{
		$data = [						
			'api_host' => "http://apiv2.dev", 
			"token"=> "767ae89fec88a53dbb465adb4d0c76c294a8a28e"
		];

	}
return $data;
?>
