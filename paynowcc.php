<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bauru do Porto - Pagamento Online - Whatsapp</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans|Francois+One:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://www.paypalobjects.com/webstatic/ppplusdcc/ppplusdcc.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	body {
		color: #fff;
		background: #9e9e9e;
		font-family: 'Open Sans', sans-serif;
	}
    .form-control {
		min-height: 41px;
		background: #fff;
        border-color: #e3e3e3;
		box-shadow: none !important;
		border-radius: 4px;
	}   
	.form-control:focus {
		border-color: #99c432;
	}
	.login-form {
		width: 310px;
		margin: 0 auto;
		padding: 100px 0 30px;		
	}
    .login-form section {
		color: #999;
		border-radius: 10px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;	
		position: relative;	
    }
	.login-form h2 {		
		font-size: 24px;
		color: #454959;
        margin: 45px 0 25px;
		font-family: 'Francois One', sans-serif;
    }
	.login-form .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -50px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: black;
		padding: 0px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.login-form .avatar img {
		width: 100%;
	}
    .login-form .btn {
        color: #fff;
        border-radius: 4px;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
    .login-btn {        
        font-size: 16px;
        font-weight: bold;
		background: #99c432;		
		margin-bottom: 20px;
    }
	.login-btn:hover, .login-btn:active {
		background: #86ac2d !important;
	}
	.social-btn {
		padding-bottom: 15px;
	}
	.social-btn .btn {		
        margin-bottom: 10px;
		font-size: 14px;
		text-align: left;
    }	
	.social-btn .btn:hover {
		opacity: 0.8;
		text-decoration: none;
	}	
    .social-btn .btn-primary {
        background: #507cc0;
    }
	.social-btn .btn-info {
		background: #64ccf1;
	}
	.social-btn .btn-danger {
		background: #df4930;
	}
	.social-btn .btn i {
		float: left;
		margin: 1px 10px 0 5px;
		min-width: 20px;
		font-size: 18px;
	}
    .or-seperator {
		height: 0;
        margin: 0 auto 20px;
        text-align: center;
        border-top: 1px solid #e0e0e0;
		width: 30%;
    }
    .or-seperator i {
        padding: 0 10px;
		font-size: 15px;
		text-align: center;
		background: #fff;
		display: inline-block;
		position: relative;
		top: -13px;
		z-index: 1;
    }
	.login-form a {
		color: #fff;
		text-decoration: underline;
	}
	.login-form form a {
		color: #999;
		text-decoration: none;
	}	
	.login-form a:hover, .login-form form a:hover {
		text-decoration: none;
	}
	.login-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>
<body>
<div class="login-form">
	<section>
		<div class="avatar">
			<img src="logox.png" alt="Avatar" />
		</div>
		<br>
          <br>
		  <div style="margin-left:20%;">
          	<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_5UjaLJ.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"   autoplay></lottie-player> 
          </div>
          <h2 class="text-center" style="margin-top:-40px;">Pagamento Online</h2>
		
		<div class="or-seperator"><i></i></div>
		
		<div id="painelBotaoPagamento" class="form-group">
        	<p style="text-align:center;">TOTAL R$: <b><?php echo $_GET['valorcompra'] ?></b></p>
			<div class="or-seperator"><i></i></div>
			<div style=" text-align: center;">  
				<button id="botaoPG" class="btn btn-danger" onclick="qualCPF();">PAGAR</button>
			<div>		
			<br>
			<p id="note" style="font-size:9px;"></p>
		</div>

		<div id="respostaTransacao" class="form-group">
			<p id="respT"> </p>
    	</div>
		
		<div id="painelPaypal" class="form-group">
			<div id="ppplusDiv"></div>
			<p id="botaoFinal"><p>
		
			
    	</div>

		
	
	
	
	
	
	
	
	</section>
	<p class="text-center" style="font-size: 10px;"><i class="glyphicon glyphicon-info-sign"></i> SEU IP ESTÁ SENDO GRAVADO: <?php echo $_SERVER["REMOTE_ADDR"]; ?><p>
    <p class="text-center" style="font-size: 9px;">Desenvolvido Bauru do Porto &copy; 2004-2022</p>
</div>





<script>
var tokenx;
var ppp;
var cpf;
     
     //gerando o token do paypal
     $.ajax({
            url: 'token.php',
            datatype: 'JSON',
            type: "GET",
             success: function (data) {

             
             tokenx = data;
			 console.log(tokenx);
             
                      

        }});

function qualCPF(){
	Swal.mixin({
  input: 'text',
  confirmButtonText: 'OK &rarr;',
  showCancelButton: true,
  progressSteps: ['1']
}).queue([
  {
    title: 'Digite seu CPF',
    text: 'Digite apenas os numeros'
  },
]).then((result) => {
  if (result.value) {
    console.log(result.value[0]);
	cpf = result.value[0];
	iniciarPagamento();
  }
});

}

function iniciarPagamento()
{

	$.ajax({

url: 'criapg.php',
	datatype: 'JSON',
	data: {"token": tokenx,
		   "nome":"Cliente Whatsapp",
		   "endereco":"Endereco do cliente do whatsapp",
		   "cep":"90050130",
		   "telefone":"51998784565",
		   "totx": <?php echo $_GET['valorcompra'] ?>
	},
	type: "POST",
	beforeSend: function(){
			$("#respostaTransacao").html('<center><i class="fa fa-spinner fa-pulse fa-fw"></i> Carregando pagamento ONLINE,aguarde...<center>');
			$("#note").hide();
			
		},
	 success: function (data) 
	 {
					  
	 
	 var respLinks = data;
	 var respLinksx = respLinks.split("*");

	 var appurl = respLinksx[0];
	 executeURL = respLinksx[1];

	 console.log(appurl);
	 console.log(executeURL);

	 $("#botaoPG").hide();
	 $("#respostaTransacao").hide();
     $("#botaoFinal").html("<center><button id='btncc' type='submit' class='btn btn-warning' id='continueButton' onclick='ppp.doContinue(); return false;'> FINALIZAR </button><center>")



	 ppp = PAYPAL.apps.PPP({
		    "approvalUrl": appurl,
			"placeholder": "ppplusDiv",
             "mode": "live",
            "payerFirstName": "Cliente do WhatsApp",
             "payerLastName": "none",
             "payerPhone": "51988454545",
             "payerTaxId": cpf,
             "payerTaxIdType": "BR_CPF",
             "language": "pt_BR",
             "country": "BR",
            "rememberedCards": localStorage.getItem("card"),
            "payerEmail":"pedidosxzy@whaatsapp.com",
            "enableContinue":"continueButton"
	 });

	 
	 
	 if (window.addEventListener) {
		 window.addEventListener("message", receiveMessage, false);
		 console.log("addEventListener successful", "debug");
		 } else if (window.attachEvent) {
			 window.attachEvent("onmessage", receiveMessage);
			 console.log("attachEvent successful", "debug");
			 } 
			 else 
			 {
				 console.log("Could not attach message listener", "debug");
				 throw new Error("Can't attach message listener");
			 }
			 function receiveMessage(event) {
 
 try {

	 var message = JSON.parse(event.data);

	 if (typeof message['cause'] !== 'undefined') { //iFrame error handling

		 ppplusError = message['cause'].replace (/['"]+/g,""); //log & attach this error into the order if possible

// <<Insert Code Here>>
		
		 switch (ppplusError)

			 {

				 case "INTERNAL_SERVICE_ERROR": //javascript fallthrough
				 case "SOCKET_HANG_UP": //javascript fallthrough
				 case "socket hang up": //javascript fallthrough
				 case "connect ECONNREFUSED": //javascript fallthrough
				 case "connect ETIMEDOUT": //javascript fallthrough
				 case "UNKNOWN_INTERNAL_ERROR": //javascript fallthrough
				 case "fiWalletLifecycle_unknown_error": //javascript fallthrough
				 case "Failed to decrypt term info": //javascript fallthrough
				 case "RESOURCE_NOT_FOUND": //javascript fallthrough
				 case "INTERNAL_SERVER_ERROR":
				 swal ("","Ocorreu um erro inesperado, por favor tente novamente. (" + ppplusError + ")"); //pt_BR
				 //Generic error, inform the customer to try again; generate a new approval_url and reload the iFrame.
				 // <<Insert Code Here>>
				 break;

				 case "RISK_N_DECLINE": //javascript fallthrough
				 case "NO_VALID_FUNDING_SOURCE_OR_RISK_REFUSED": //javascript fallthrough
				 case "TRY_ANOTHER_CARD": //javascript fallthrough
				 case "NO_VALID_FUNDING_INSTRUMENT":
				 swal ("","Seu pagamento não foi aprovado. Por favor utilize outro cartão, caso o problema persista entre em contato com o Bauru do Porto WHATSAPP (51-996235497). (" + ppplusError + ")"); //pt_BR
				 //Risk denial, inform the customer to try again; generate a new approval_url and reload the iFrame.
				 // <<Insert Code Here>>
				 break;

				 case "CARD_ATTEMPT_INVALID":
				 swal ("","Ocorreu um erro inesperado, por favor tente novamente. (" + ppplusError + ")"); //pt_BR
				 //03 maximum payment attempts with error, inform the customer to try again; generate a new approval_url and reload the iFrame.
				 // <<Insert Code Here>>
				 break;

				 case "INVALID_OR_EXPIRED_TOKEN":
				 swal ("","A sua sessão expirou, faça um refresh no site ou app (" + ppplusError + ")"); //pt_BR
				 //User session is expired, inform the customer to try again; generate a new approval_url and reload the iFrame.
				 // <<Insert Code Here>>
				 break;

				 case "CHECK_ENTRY": 
				 swal ("","Por favor revise os dados de Cartão de Crédito inseridos. (" + ppplusError + ")"); //pt_BR
				 //Missing or invalid credit card information, inform your customer to check the inputs.
				 // <<Insert Code Here>>
				 break;
				
				 default:  //unknown error & reload payment flow
				 swal ("","Ocorreu um erro inesperado, por favor tente novamente. (" + ppplusError + ")"); //pt_BR
				 //Generic error, inform the customer to try again; generate a new approval_url and reload the iFrame.
				 // <<Insert Code Here>>
				
			 }

	 }

	 if (message['action'] == 'checkout') { //PPPlus session approved, do logic here

	     var rememberedCard = message['result']['rememberedCards'];
		 var payerID = null;
		 var installmentsValue= null;
		 
		 rememberedCard = message['result']['rememberedCards']; //save on user BD record
		 payerID = message['result']['payer']['payer_info']['payer_id']; //use it on executePayment API
		 console.log(payerID);
		 console.log("asldkslaçkdsakdsaklçdklçsakdsaklçdksalçdklsa: " + rememberedCard);
		 
		 localStorage.setItem("card", rememberedCard);
		 localStorage.setitem("idTransacao",payerID);



		 // executar pagamento
		 $.ajax({
                url:'executapagamento.php',
                datatype: 'JSON',
                 data: {"token": this.tokenx,
                         "payid": payerID,
                         "urlexec": this.executeURL

                },
                type: "POST",
                 beforeSend: function(){
					$("#respostaTransacao").show();
					 $("#ppplusDiv").hide();
                     $("#btncc").hide();
                     $("#respostaTransacao").html('<br>' + '<br>' + ' <center><i class="fa fa-spinner fa-pulse fa-fw"></i><h3>Processando transação, Aguarde...<h3></center>');

                    
                    
                },
                success: function (resp) {
                console.log(resp); 
                
                

                if (resp == "approved"){
                    $("#ppplusDiv").html('');
					$("#respostaTransacao").show();
                    $("#respostaTransacao").html('<center><b>TRANSAÇÂO APROVADA!</b><br><br><b>Valor:</b> ' + <?php echo $_GET['valorcompra'] ?> + '<br><b>ID TRANSAÇÃO: </b>' + payerID +'<br><br>Obrigado por comprar no Bauru do Porto!<br><br> <button class="btn btn-warning" onclick="EnviarCpv();">ENVIAR COMPROVANTE</button></center>' );
                    
        
               
                }else
                {
					 $("#respostaTransacao").show();
                     $("#respostaTransacao").html('<center><b>TRANSAÇÂO NEGADA!</b></center>');
					 
                     
					 swal.fire({
                                title: 'Transação não Autorizada!',
                                text:  'Por favor tente outro cartão de credito ou escolha outra forma de pagamento. Clique novamente no link enviado pelo WhatsApp',
                                }
                            ,function(){
                                
                            });
                }
            
        }});
		 if(message['result']['term']['term']){
			 installmentsValue = message['result']['term']['term']; //installments value
		 } else {
			 installmentsValue=1; //no installments
		 }     
	 }

 } catch (e){ //treat exceptions here

  // <<Insert Code Here>>

 }

}


	}



});

}

function EnviarCpv()
{
   if( navigator.userAgent.match(/Android/i)
          || navigator.userAgent.match(/webOS/i)
          || navigator.userAgent.match(/iPhone/i)
          || navigator.userAgent.match(/iPad/i)
          || navigator.userAgent.match(/iPod/i)
          || navigator.userAgent.match(/BlackBerry/i)
          || navigator.userAgent.match(/Windows Phone/i)
          ){

            
            
            window.open('https://api.whatsapp.com/send?phone=55 TELEFONE AQUI &text=COMPROVANTE DE PAGAMENTO ONLINE%0A%0A' + '%0A' +  '%0A' + 'ID TRANSACAO: ' + localStorage.getItem('idTransacao') + '%0A' + 'Total Pago: ' + <?php echo $_GET['valorcompra'] ?>); 

			localStorage.removeItem("idTransacao");

  
           }
            else {
            
             alert("Não é possivel enviar comprovantes via paginas web, apenas por dispositivos Mobiles. Clique em copiar e depois cole o comprovante de pagamento no whatsapp do Bauru do Porto!");

          }

}
</script>
</body>
</html>



