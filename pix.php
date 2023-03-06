<?php

require 'vendor/autoload.php';

// use Piggly\Pix\DynamicPayload;
use Piggly\Pix\Exceptions\EmvIdIsRequiredException;
use Piggly\Pix\Exceptions\InvalidEmvFieldException;
use Piggly\Pix\Exceptions\InvalidPixKeyException;
use Piggly\Pix\Exceptions\InvalidPixKeyTypeException;
use Piggly\Pix\StaticPayload;
use Piggly\Pix\Parser;

try
{
	// Pix estático
	// Obtém os dados pix do usuário
	// -> Dados obrigatórios
	$keyType  = Parser::KEY_TYPE_RANDOM;
	$keyValue = 'd5a84feb-27aa-4505-a9f6-cf10f45b9419';
	$merchantName = '3º WEB';
	$merchantCity ='Caraguatatuba';

	// -> Dados opcionais
	$amount = '0.01';
	$tid = '00001';
	$description = 'Biblioteca pix';

	$pix = 
		(new StaticPayload())
			// ->applyValidCharacters()
			// ->applyUppercase()
			// ->applyEmailWhitespace()
			->setPixKey($keyType, $keyValue)
			->setMerchantName($merchantName)
			->setMerchantCity($merchantCity)
			->setAmount($amount)
			->setTid($tid)
			->setDescription($description);


	// Código pix
	echo $pix->getPixCode();
	// QR Code
	echo '<img style="margin:12px auto" src="'.$pix->getQRCode().'" alt="QR Code de Pagamento" />';
}
catch ( InvalidPixKeyException $e )
{ /** Retorna que a chave pix está inválida. */ 
echo 'chave pix está inválida';}
catch ( InvalidPixKeyTypeException $e )
{ /** Retorna que a chave pix está inválida. */
echo' chave pix está inválida.'; }
catch ( InvalidEmvFieldException $e )
{ /** Retorna que algum campo está inválido. */
echo 'algum campo está inválido.'; }
catch ( EmvIdIsRequiredException $e )
{ /** Retorna que um campo obrigatório não foi preenchido. */
echo' campo obrigatório não foi preenchido.'; }

?>