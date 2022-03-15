<?php
//PRODUCAO
$ClientID='';
$Secret='';



$Login= curl_init("https://api.paypal.com/v1/oauth2/token");
curl_setopt($Login, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($Login, CURLOPT_USERPWD, $ClientID.":".$Secret);
curl_setopt($Login, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
$Resposta = json_decode(curl_exec($Login));


echo $Resposta->access_token;

?>