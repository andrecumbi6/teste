<?php

// funcao para encriptar o texto fornecido
function encrypt($chave, $text)
{
	// Alterar a chave para letras minusculas para simplificar
	$chave = strtolower($chave);
	
	// Inicializacao das variaveis
	$code = "";
	$ki = 0;
	$kl = strlen($chave);
	$length = strlen($text);
	
	//inteirar se sobre cada caratere do texto
	for ($i = 0; $i < $length; $i++)
	{
		//Se o caratere for um alfabeto, criptografe-a
		if (ctype_alpha($text[$i]))
		{
			// maiusculas
			if (ctype_upper($text[$i]))
			{
				$text[$i] = chr(((ord($chave[$ki]) - ord("a") + ord($text[$i]) - ord("A")) % 26) + ord("A"));
			}
			
			// minusculas
			else
			{
				$text[$i] = chr(((ord($chave[$ki]) - ord("a") + ord($text[$i]) - ord("a")) % 26) + ord("a"));
			}
			
			//atualiza o indice da chave
			$ki++;
			if ($ki >= $kl)
			{
				$ki = 0;
			}
		}
	}
	return $text;
}

// funcao para descriptar o texto fornecido
function decrypt($chave, $text)
{
	// Alterar a chave para letras minusculas para simplificar
	$chave = strtolower($chave);
	
	// Inicializacao das variaveis
	$code = "";
	$ki = 0;
	$kl = strlen($chave);
	$length = strlen($text);
	
	// inteirar se sobre cada caratere do texto
	for ($i = 0; $i < $length; $i++)
	{
		// Se o caratere for um alfabeto, descriptografe-a
		if (ctype_alpha($text[$i]))
		{
			// maiusculas
			if (ctype_upper($text[$i]))
			{
				$x = (ord($text[$i]) - ord("A")) - (ord($chave[$ki]) - ord("a"));
				
				if ($x < 0)
				{
					$x += 26;
				}
				
				$x = $x + ord("A");
				
				$text[$i] = chr($x);
			}
			
			// minusculas
			else
			{
				$x = (ord($text[$i]) - ord("a")) - (ord($chave[$ki]) - ord("a"));
				
				if ($x < 0)
				{
					$x += 26;
				}
				
				$x = $x + ord("a");
				
				$text[$i] = chr($x);
			}
			
			// atualiza o indice da chave
			$ki++;
			if ($ki >= $kl)
			{
				$ki = 0;
			}
		}
	}
	
	// retorna o texte descriptado
	return $text;
}

?>