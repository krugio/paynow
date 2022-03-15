# paynow
<h1 align="center"> SISTEMA DE PAGAMENTO ONLINE VIA WHATSAPP via PAYPAL</h1>
<h3 align="center"> Desevolvido para quem quer mandar um link de pagamento online via cartão de crédito personalizado</h3>
<h5 align="center"> Após o pagamento confirmado o pagamento o cliente manda a notificação automática para o whatsapp cadastrado</h5>

<p>Funciona da seguinte maneira: <br>
   
  1. Abrir o arquivo TOKEN.PHP - Colocar suas credenciais da sua conta PAYPAL - CLIENTid e SECRET
  
  2. Abrir o arquivo paynowcc.php e configurar o telefone que receberá a notificação do pagamento na LINHA 476 você encontará o seguinte:
   window.open('https://api.whatsapp.com/send?phone=55 TELEFONE AQUI &text=COMPROVANTE DE PAGAMENTO ONLINE%0A%0A' + '%0A' +  '%0A' + 'ID TRANSACAO: ' + localStorage.getItem('idTransacao') + '%0A' + 'Total Pago: ' + <?php echo $_GET['valorcompra'] ?>); 
  
  
  2. Subir os arquvios para seu servidor.
  
  3. Para usar voceê deverá mandar o link da sua url com a seguinte sintaxe para o seu cliente
     ex: https://wwww.seudominio.com.br/paynowcc.php?valordacompra=11.00
  
  4. O valordacompra=(Valor que você quer cobrar este dever sem usado com ponto e não virgurla)
  
  </p>
  
  <div style="">
  <img src='https://github.com/krugio/paynow/blob/master/tela1.png'> 
  <img src='https://github.com/krugio/paynow/blob/master/tela2.png'> 
  </div>
  
  
  
  
