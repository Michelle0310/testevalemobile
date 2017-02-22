<!DOCTYPE html>
<html lang="pt-br">

	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    	<title>Mouth</title>

    	<!-- Bootstrap -->
    	<link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    	<link href="estilo.css" rel="stylesheet">

    	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    	<!--[if lt IE 9]>
     	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->

  	</head>

   	<body>
      <!-- Barra navegação -->
    <nav class="navbar navbar-default">
      <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" 
                  data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">Alternar Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" id=logo class="navbar-brand">Mouth</a>
        </div>

        <div class="collapse navbar-collapse" id="barra-navegacao">

          <ul class="nav navbar-nav navbar-right">
            <li> <a href="#">home</a> </li>
            <li> <a href="#">empresa</a> </li>
            <li> <a href="#">clientes</a> </li>
            <li> <a href="#">produtos</a> </li>
            

            <li class="dropdown"> 
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Minha Conta <span class="caret"></span>
              </a> 
              <ul class="dropdown-menu">
                <li> <a href="#">Editar</a> </li>
                <li> <a href="#">Logout</a> </li>
              </ul>
            

            </li>

          </ul>

        </div>

      </div>
    </nav>
    
   	<div class="container">

   		<div class="col-sm-7">
   		<img src="imagens/foto.jpg" class= "img-circle img-responsive col-sm-3 navbar-left" >
   			 <h2>Fechamento do Pedido</h2> <br>
   		</div>
      
   	</div>

   	<!--Pedidos -->

  
     
      <div class="container">  
		 	
    	 <script> 

				function Calc(){
				form.TotaldoPedido.value = (form.Quantidade.value*1) * (9.99*1)
				}

			</script>

           


				<form name="Produto"><b> Produto: </b>
                	<select name=produto>
                    	<option value= "000"> Selecione </option>
                    	<option value= "001"> 001 Batom vermelho</option>
                    	<option value= "002"> 002 Batom rosa</option>
                    	<option value= "003"> 003 Batom verde</option>
                    	<option value= "004"> 004 Batom roxo</option>
                	</select> <br> <br>
                </form>
      
            	<form name="valorunitario"><b> Valor Unitário: </b>
                 	<select name=valorunitario>   
                    	<option value= "005"> 9.99 </option>
                 	</select> <br> <br> 
        		</form>

				<form name="form"> <b> Quantidade: </b> 
					<input name="Quantidade" type="number"><br> <br>
                
				
				<form name="formadeentrega"> <b> Forma de Entrega:</b> <br>
					<input type="radio" name="formadeentrega" /> Entrega <br>
					<input type="radio" name="formadeentrega" /> Retira <br> <br>
		
					<input type="button" value="Total do Pedido" onclick="Calc()"> 
					<input name="TotaldoPedido" readonly /> <br> <br>
                </form>
      			
				<form name="formadepagamento"> <b> Forma de Pagamento: </b>
                  	 <select name=formadepagamento>
                     <option value= "001"> Selecione </option>
                     <option value= "001"> Boleto</option>
                     <option value= "002"> Cartão de Crédito</option>
                     <option value= "003"> Dépósito</option>
                     </select> <br> <br>
                </form>

                 <tr> 
   				<input type="submit" value="Enviar Pedido" onclick= "valida_envia()">
				</tr>
			
			

            <form>
				
				<form role="form" action="index2.php" method="get">
				
            </form>

		   		
            </div>


				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

   </body>
</html>