<?php

class Funcoes {
	
	/**
	 * metodo para montar uma string com espa�os em branco
	 * @param unknown $string
	 * @param unknown $tamanho
	 * @param string $posicao
	 * @return string|boolean
	 */
	public function montar_branco($string, $tamanho, $posicao = 'left') {
		//contanto tamanho da string
		$qtd_value = (int) strlen($string);
		
		//verificando se existem numeros
		if($tamanho > 0) {
			//$result = '';
			//$qtd_zeros = $tamanho - $qtd_value;
			
			//for ($i = 0; $i < $qtd_zeros; $i++) {
			//	$result .= ' ' ;
			//}
				
			//verificando posi��o dos zeros
			if($posicao == 'left') {
				//$result = $result . $string;
				$result = str_pad( $string, $tamanho, " ", STR_PAD_LEFT );
			}elseif($posicao == 'right') {
				//$result = $string . $result;
				$result = str_pad( $string, $tamanho, " ", STR_PAD_RIGHT );
			}
			
				
			return $result;
		}else {
			throw new Exception('Error - tamanho da quantidade de espa�os n�o especificado.');
		}
	}
	
	/**
	 * Preenche com zeros a esqueda da string
	 * @param unknown $string
	 * @param unknown $tamanho
	 * @return string
	 */
	public function add_zeros($string, $tamanho, $posicao = 'left') {
		//contanto tamanho da string
		$qtd_value = (int) strlen($string);
		
		//verificando se existem numeros
		if($tamanho > 0 && $qtd_value <= $tamanho) {
			
			//$result = '';
			//$qtd_zeros = $tamanho - $qtd_value;
	
			//for ($i = 0; $i < $qtd_zeros; $i++) {
			//	$result .= '0' ; 
			//}
			
			//verificando posi��o dos zeros
			if($posicao == 'left') {
				//$result = $result . $string;
				$result = str_pad( $string, $tamanho, "0", STR_PAD_LEFT );
			}elseif($posicao == 'right') {
				//$result = $string . $result;
				$result = str_pad( $string, $tamanho, "0", STR_PAD_RIGHT );
			}
			
			return $result;
		}else {
			return false;
		}
	}
	
	/**
	 * validando linha
	 * @param unknown $string
	 * @return string
	 */
	public function valid_linha($string, $tamanho_linha = 400) {
		$return  = $this->removeAccents($string);

		if ($this->valid_tamanho_campo($return, $tamanho_linha)) {
			//convertendo string para mai�scula
			return strtoupper($this->removeAccents($return));
		}else {
			//die($string);
			throw new Exception('Erro - Informações de linha invalidas.');
		}
	}

	
	/**
	 * metodo para remover acentos
	 * @param unknown $value
	 * @return string
	 */
	public function removeAccents($string, $slug = false)
	{
		// Código ASCII das vogais
	  $ascii['a'] = range(224, 230);
	  $ascii['e'] = range(232, 235);
	  $ascii['i'] = range(236, 239);
	  $ascii['o'] = array_merge(range(242, 246), array(240, 248));
	  $ascii['u'] = range(249, 252);
	  // Código ASCII dos outros caracteres
	  $ascii['b'] = array(223);
	  $ascii['c'] = array(231);
	  $ascii['d'] = array(208);
	  $ascii['n'] = array(241);
	  $ascii['y'] = array(253, 255);
	  foreach ($ascii as $key=>$item) {
	    $acentos = '';
	    foreach ($item AS $codigo) $acentos .= chr($codigo);
	    $troca[$key] = '/['.$acentos.']/i';
	  }
	  $string = preg_replace(array_values($troca), array_keys($troca), $string);
	  // Slug?
	  if ($slug) {
	    // Troca tudo que não for letra ou número por um caractere ($slug)
	    $string = preg_replace('/[^a-z0-9]/i', $slug, $string);
	    // Tira os caracteres ($slug) repetidos
	    $string = preg_replace('/' . $slug . '{2,}/i', $slug, $string);
	    $string = trim($string, $slug);
	  }
	  
	  return $string;
	}
	
	/**
	 * valida o tamanho do campo
	 * @param unknown $string
	 * @param unknown $tamanho
	 * @return boolean
	 */
	public function valid_tamanho_campo($string, $tamanho, $menor_que = false) {
		$length = (int) strlen($string);
		
		if($length == $tamanho) {
			return true;
		}elseif($menor_que) {
			if($length > 0 && $length <= 40) {
				return true;
			}else {
				return false;
			}
		}else {
			return false;
		}
	}
	
	/**
	 * metodo para remover forma��o de moedas: pontos e virgulas
	 * @param unknown $valor
	 * @return mixed|boolean
	 */
	public function remove_formatacao_moeda($valor) {
		if(is_numeric($valor)) {
			$return = str_replace(".", "", $valor);
			$return = str_replace(",", "", $return);
			
			return $return;
		}else {
			throw new Exception('Error - O valor ' . $valor . ' nao eh um numero.');
		}
	}
	
	/**
	 * metodo para validar o CPF
	 * @param string $cpf
	 * @return boolean
	 */
	public function validaCPF($cpf = null) {
	
		// Verifica se um n�mero foi informado
		if(empty($cpf)) {
			return false;
		}
	
		// Elimina possivel mascara
		$cpf = preg_replace('[^0-9]', '', $cpf);
		$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		 
		// Verifica se o numero de digitos informados � igual a 11
		if (strlen($cpf) != 11) {
			return false;
		}
		// Verifica se nenhuma das sequ�ncias invalidas abaixo
		// foi digitada. Caso afirmativo, retorna falso
		else if ($cpf == '00000000000' ||
				 $cpf == '11111111111' ||
				 $cpf == '22222222222' ||
				 $cpf == '33333333333' ||
			 	 $cpf == '44444444444' ||
				 $cpf == '55555555555' ||
				 $cpf == '66666666666' ||
				 $cpf == '77777777777' ||
				 $cpf == '88888888888' ||
				 $cpf == '99999999999') {
					return false;
					// Calcula os digitos verificadores para verificar se o
					// CPF � v�lido
		} else {
			 
			for ($t = 9; $t < 11; $t++) {
				 
				for ($d = 0, $c = 0; $c < $t; $c++) {
					$d += $cpf{$c} * (($t + 1) - $c);
				}
				$d = ((10 * $d) % 11) % 10;
				if ($cpf{$c} != $d) {
					return false;
				}
			}

			return true;
		}
	}
	
	/**
	 * retorna o digito verificador do nosso numero com o numero da carteira
	 * @param unknown $nosso_numero
	 * @return Ambigous <string, number>
	 */
	public function digito_verificador_nosso_numero($nosso_numero) {
	    //die($nosso_numero);
		$modulo = self::modulo11($nosso_numero, 7);
		
		//die(print_r($modulo));
		
		$digito = 11 - $modulo['resto'];
	
		if ($digito == 10) {
			$dv = "0";
		} elseif($digito == 11) {
			$dv = 0;
		} else {
			$dv = $digito;
		}
	
		return $dv;
	}
	
	/**
	 * calculo do modulo 11 do digito veirificador
	 * @param unknown $num
	 * @param number $base
	 * @return multitype:number
	 */
	public static function modulo11( $num, $base=9)
	{
		$fator = 2;
		$soma  = 0;
		// Separacao dos numeros.
		for ($i = strlen($num); $i > 0; $i--) {
			//  Pega cada numero isoladamente.
			$numeros[$i] = substr($num,$i-1,1);
			//  Efetua multiplicacao do numero pelo falor.
			$parcial[$i] = $numeros[$i] * $fator;
			//  Soma dos digitos.
			$soma += $parcial[$i];
			if ($fator == $base) {
				//  Restaura fator de multiplicacao para 2.
				$fator = 1;
			}
			$fator++;
		}
		
		$result = array(
				'digito' => ($soma * 10) % 11,
				// Remainder.
				'resto'  => $soma % 11,
		);
		if ($result['digito'] == 10){
			$result['digito'] = 0;
		}
		return $result;
	}
	
	/**
	 * metodo para resumir o texto
	 * ESSA NÃO É UMA FORMA IDEAL
	 * @param unknown $string
	 * @param unknown $tamanho
	 * @return string
	 */
	public function resume_texto($string, $tamanho) {
		return substr($string, 0, $tamanho);
	}
	
	public function remove_formatacao($valor) {
		$valor = str_replace(".", "", $valor);
		$valor = str_replace(",", "", $valor);
		$valor = str_replace("-", "", $valor);
		$valor = str_replace("/", "", $valor);
		
		return $valor;
		
	}
	
	public function remover_acentos($str){ 
		$a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'Ð', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', '?', '?', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', '?', '?', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', '?', 'O', 'o', 'O', 'o', 'O', 'o', 'Œ', 'œ', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'Š', 'š', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Ÿ', 'Z', 'z', 'Z', 'z', 'Ž', 'ž', '?', 'ƒ', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', '?', '?', '?', '?', '?', '?', 'ç', 'Ç', "'", "º", "ª" ); 
		$b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o','c','C', " ", " " , " " ); 
		return str_replace($a, $b, $str); 
	} 
}