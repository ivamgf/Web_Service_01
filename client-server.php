<?
// Variáveis
$Username    = "06096391000176";
$Password    = "33BPM@06096391000176"; 

// Criando a instância de SoapClient
$url         = "https://homologacao.atende.net/atende.php?pg=services&service=WGTLancamentoTributario&cidade=brusque"; 
$client = new soapclient($url);
$params = array('Username' => $Username, 'Password' => $Password);

// Parâmetros de Entrada
$identificador_proprio = "";
$ano_calculo = 2019;
$data_base_calculo = 26/08/2019;
$codigo_sub_receita = 999;
$cpfcnpj = "074.633.689-63";
$codigo_bloco = 44;
$codigo_item = 1;
$sequencia_item = 1;
$valor = 150.25;
$ano_forma_pagamento = 0;
$codigo_forma_pagamento = 4;
$quantidade_parcelas = 1;
$principal = true;
$data_base_vencimento = 20/10/2019;

// Array de Entrada
$entradas = array(
				'identificador_proprio'=>$identificador_proprio, 
			 	'ano_calculo'=>$ano_calculo, 
			 	'data_base_calculo'=>$data_base_calculo,
			 	'codigo_sub_receita'=>$codigo_sub_receita,
			 	'cpfcnpj'=>$cpfcnpj, 
			 	'codigo_bloco'=>$codigo_bloco, 
			 	'codigo_item'=>$codigo_item,
			 	'sequencia_item'=>$sequencia_item,
			 	'valor'=>$valor, 
			 	'ano_forma_pagamento'=>$ano_forma_pagamento, 
			 	'codigo_forma_pagamento'=>$codigo_forma_pagamento,
			 	'quantidade_parcelas'=>$quantidade_parcelas,
			 	'principal'=>$principal,
			 	'data_base_vencimento'=>$data_base_vencimento
			 );

// Agora, usamos a instância e fazemos uma chamada ao método que criamos, passando o parâmetro correto
$response = $client->call('get_message',$param, $entradas);

// Processa a requisição
if($client->fault)
{
echo "FAULT:

Code: (".$client->faultcode."

";
echo "String: ".$client->faultstring;
}
else
{
echo $response;
}
?>