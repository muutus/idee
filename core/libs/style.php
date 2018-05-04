<?php	
/**
 * Clase que manipula los archivos de estilo
 * Utiliza less como motor
 * 
 * @author muutus
 * @author http://muutus.cl
 */
	class Style{		
	    static function print_file_vendor( $vendor, $file, $rute = 'css' ){
	        
	        $file = ABSPATH . VENDOR . '/' . $vendor . '/' . $rute . '/' . $file;
	        
	        if( file_exists( $file ) ){
	            $less = new lessc;
	            return self::minify( file_get_contents( $file ) );
	        }
	    }
	    
	    /**
	     * Devuelve un less Compilado pasado como parametro
	     * 
	     * @param string $lessFile
	     * @return string
	     */
	    static public function compileLess( $lessFile ){
	    	$less = new lessc;
	    	return self::minify( $less->compileFile( $lessFile ) );
	    }
	    
	    /**
	     * Imprime un less compilado pasado como parametro
	     * 
	     * @param string $lessFile
	     */	    
	    static public function printLess( $lessFile ){
	    	echo self::compileLess($lessFile);
	    }
	    
		static function compile_theme( $theme ){
		    
			$file = DSHTHEMES . $theme . '/style.less';
			
			if( file_exists( $file ) ){
				$rute = $file;
			}else{
				$rute = DSHTHEMES . 'default/style.less';
			}
			
			$less = new lessc;
			return self::minify( $less->compileFile( $rute ) );
		}		
		
		static private function list_themes_dir($path){
			$dirs = array();
			if( is_dir( $path ) ){
				if( $dh = opendir( $path ) ){
					while( $file = readdir($dh) ){
						if( is_dir( $path . $file ) && $file != '.' && $file != '..' )			
							array_push( $dirs, $path.$file );
					}
				}
				closedir($dh);
			}
			return ( !empty( $dirs ) )? $dirs : NULL;
		}
		
		static private function minify( $buffer ){
			$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);			
			$buffer = str_replace(': ', ':', $buffer);			
			$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
			return $buffer;
		}
		
		static function get_list(){		 
			
		    $dirs = self::list_themes_dir( DSHTHEMES );
			
			$themes = array();
			$di = 0;
			foreach( $dirs as $dir ){
				if( is_dir( $dir ) ){
					if( $dh = opendir( $dir ) ){
						$flag = false;
						while( $file = readdir($dh) ){								
							if( $file == '.' || $file == '..' ) continue;					
							if( $file == 'style.json' || $file == 'style.less'  ) $flag = true;
							else $flag = false;							
						}
						if( $flag ){
							$data = file_get_contents( $dir.'/style.json' );
							$data = json_decode( $data );
							$themes[$di] = $data;
						}
					}
					closedir($dh);
				}
				$di++;
			}
			
			return $themes;
		}
	}	
?>