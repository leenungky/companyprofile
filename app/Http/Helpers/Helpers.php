<?php
	namespace App\Http\Helpers;		
	use \Session; 
	use App\Http\Helpers\WebCurl;
	use App\Http\Helpers\Api;
	use Illuminate\Support\Facades\DB;

	class Helpers{		

		public function getNominal($pNominal){			
			return "Rp ".number_format($pNominal);	
		}

		public function getTarifByKecamatan($params){
			$raw = json_encode($params);        
        	$resp = $this->curl("/indorapid/tarifbykecamatan", $raw);
        	return json_decode($resp);
		}

		public function getTarifByFilter($filter){			
	        $data = array(
	            "token" => config('config.token'), 
	            "filter" => $filter);
	        $raw = json_encode($data);
	        $data = self::curl("/indorapid/tarif", $raw);
	        return json_decode($data);
		}

		public function submitContact($req){
			$params["token"] = config('config.token');
			$params["name"] = $req->json("nama", "");
			$params["email"] = $req->json("email", "");
			$params["phone"] = $req->json("phone", "");
			$params["message"] = $req->json("pesan", "");
			$raw = json_encode($params);
			$data = self::curl("/indorapid/contact", $raw);
			return json_decode($data);
		}

		public static function curl($url, $raw){        
	        $url = config('config.api_host')."$url"; #live              
	        $id = uniqid();
	        $date = date('Y.m.d');
	        $time = date('H:i:s');
	        $msg = "$id > $time Request : $url : $raw\n";

	        $f = fopen(storage_path().'/logs/api/'.$date.'.log','a');
	        fwrite($f,$msg);
	        fclose($f);

	        $ch = curl_init();
	            // 2. set the options, including the url
	        curl_setopt($ch, CURLOPT_URL,           $url);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
	        curl_setopt($ch, CURLOPT_POST,           1 );
	        curl_setopt($ch, CURLOPT_POSTFIELDS,     $raw );
	        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
	        curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type:application/json'));
	        $output = curl_exec($ch);
	        curl_close($ch);

	        $time = date('H:i:s');
	        $msg = "$id > $time Response : $output\n";
	        $f = fopen(storage_path().'/logs/api/'.$date.'.log','a');
	        fwrite($f,$msg);
	        fclose($f);

	        return $output;
	    }

	}
?>