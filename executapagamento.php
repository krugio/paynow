<?php
    $token = $_POST['token'];
    $idPayer = $_POST['payid'];
    $urlEx = $_POST['urlexec'];
 
    $data = '{
    "payer_id": "'.$idPayer.'"
    }';
 
    $Pagamento=curl_init($urlEx);
    curl_setopt($Pagamento, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($Pagamento, CURLOPT_POSTFIELDS, $data);
    curl_setopt($Pagamento, CURLOPT_HTTPHEADER, array("Content-Type: application/json","Authorization: Bearer ".$token));
    $Pgr = json_decode(curl_exec($Pagamento));
    

    $res = (array) $Pgr;
    if (in_array('approved', $res))
    {
        print_r($Pgr->state);
    }else
    {
        print_r($Pgr->name);
    }
?>