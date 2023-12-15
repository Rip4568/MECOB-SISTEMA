<?php
class lotes{
	
	
	private $id 		   		  = ""; 
	private $nome 		 		= ""; 
	private $num_registro  		= ""; 
	private $dt_nascimento	   = ""; 
	private $tipo	 			= "";
	
	public function __set($atrib, $value){
		$this->$atrib = $value;
    }
  
    public function __get($atrib){
        return $this->$atrib;
    }	
	
	function prepare($acao) {
		
	   $string_sql = "";	
	   	
	   switch ($acao) {
			case 'update':	
				
				foreach ($this as $key => $value) {
				   if (($value != "") && ($key != "id")){
						$string_sql .= " $key = '".$value."',";   
				   }
				   //print "$key => $value\n";
			    }
				$string_sql = substr($string_sql,0,-1);			
				break;
			case 'insert':	
				
				$campos =  "(";
				$valores = "values ("; 
				
				foreach ($this as $key => $value) {
					$campos .=  " $key,";
					if ($key == "id"){
						$valores .= " NULL,";
					}
					else{
					    if ($value == ""){
							$valores .= " NULL,";   
						}
						else{
					    	$valores .= " '".$value."',";   
						}  
					}
			    }
				$string_sql = substr($campos,0,-1).") ".substr($valores,0,-1).")";			
				break;
			case 'select':	
				
				foreach ($this as $key => $value) {
				   if (($value != "")){
						$string_sql .= " and $key = '".$value."' ";   
				   }
			    }
				$string_sql = substr($string_sql,0,-1);			
				break;
			case 'delete':	
				
				foreach ($this as $key => $value) {
				   if (($value != "")){
						$string_sql .= " and $key = '".$value."' ";   
				   }
			    }
				$string_sql = substr($string_sql,0,-1);			
				break;
	   }
       return $string_sql;
    }
}

?>