<?php	
	//require_once('core.php');	
	class SITE{
		
		public static function url(){
		    return self::baseURL().$_SERVER['HTTP_HOST'].'/';
		}
		
		private static function baseURL(){
			return sprintf(
				"%s://",
				isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http'			
			);
		}	
		
		static function GetData($title = '', $description= '', $curr = ''){
			return (Object)array(
				'title' => $title,
				'description' => $description,
				'item' => $curr
			);
		}
		
		static function GetUrl($url) { 
			// Tranformamos todo a minusculas 
			$url = strtolower($url); 
			//Rememplazamos caracteres especiales latinos 
			$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ'); 
			$repl = array('a', 'e', 'i', 'o', 'u', 'n'); 
			$url = str_replace ($find, $repl, $url); 
			// Añadimos los guiones 
			$find = array(' ', '&', '\r\n', '\n', '+');
			$url = str_replace ($find, '-', $url); 
			$url = str_replace ( '/','-',$url );
			// Eliminamos y Reemplazamos otros carácteres especiales 
			$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/'); 
			$repl = array('', '-', ''); 
			$url = preg_replace ($find, $repl, $url); 
			return $url; 
		}
	}
?>