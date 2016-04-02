<?php
	class Geo {
		protected $api = 'http://geoip.nekudo.com/api/%s';
		
		protected $properties = [];
		
		public function __get($key) {
			if (isset($this->properties[$key]))	{
				return $this->properties[$key];			
			}	
			
			return null;
		}
		
		public function request($ip_address) {
			$url = sprintf($this->api, $ip_address);
			$data = $this->sendRequest($url);	
			
			$this->properties = json_decode($data, true);
 			//var_dump($this->properties);	
		}	
		
		protected function sendRequest($url) {
						
			$curl = curl_init();
			//Set options for curl function
			
			//get back the data from curl function
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			
			curl_setopt($curl, CURLOPT_URL, $url);
			
			//handle errors if IP address is invalid			
			
			return curl_exec($curl);		
		}
	}
?>