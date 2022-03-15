<?php
$data ='{
     "intent": "sale",
     "payer": {
     "payment_method": "paypal"
    },
    
     "transactions": [{
     "amount": {
      "currency": "BRL",
     "total": "'.$_POST['totx'].'",
     "details": {
      "shipping": null,
     "subtotal": "'.$_POST['totx'].'",



"tax": "0.00"
}
},
"description": "Pagamento pedido feito pelo whatsapp",
"payment_options": {
"allowed_payment_method": "IMMEDIATE_PAY"
},
"item_list": {
"shipping_address": {
"recipient_name": "'.$_POST['nome'].'",
"line1": "'.$_POST['endereco'].'",
"line2": "x",
"city": "Porto Alegre",
"country_code": "BR",
"postal_code": "'.$_POST['cep'].'",
"state": "Rio Grande do Sul",
"phone": "'.$_POST['telefone'].'"
}

}
}],
"redirect_urls": {
"return_url": "https://example.com/return",
"cancel_url": "https://example.com/cancel"
}
}';





 $Pagamento=curl_init("https://api.paypal.com/v1/payments/payment");
 curl_setopt($Pagamento, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($Pagamento, CURLOPT_POSTFIELDS, $data);
 curl_setopt($Pagamento, CURLOPT_HTTPHEADER, array("Content-Type: application/json","Authorization: Bearer ".$_POST['token']));
 $Pgr = json_decode(curl_exec($Pagamento));



 echo $Pgr->links[1]->href ."*". $Pgr->links[2]->href;


?>