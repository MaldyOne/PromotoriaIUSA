<!DOCTYPE html>
<html>
<head>
	<title>Caratula de Descuentos</title>
	 <style type="text/css">
  #header { position: fixed; 
            left: 0px; 
            top: -180px; 
            right: 0px; 
            height: 150px; 
           }  
  body{
    margin: 0;
  }
  .container{
    width: 700px;
    height: 500px;
    margin: 0;
  }


  /*Content-datos*/
  .content-datos{
    margin: 5px 0 0 0;
  }

  .content-datos-tabla{
    width: 700px;
    height: 500px;
    margin: 5px 0 0 0;
  }

  .cliente-img{
    width: 100px;
    margin: -15px 0 0 0;
  }
  
  .tabla-datos {
    margin: 0px 0 0 0;
  }

  p.titulo-datos {
    font-size: 12px;
    font-weight: bold;
    font-family: Arial;
    height: 18px;
    display: block;
    text-align: right;
    padding:0 20px 0 0;
  }

  p.text-datos {
    font-size: 12px;
    font-family: Arial;
    height: 18px;
    display: block;
  }

  .tabla-datos td, .tabla-datos th {
      padding: 8px;
  }

  /* Tabla 1*/

  .tabla-1 {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 700px;;
    margin: -10px 0 0 0;
    font-size: 6px;
  }

  .tabla-1 td, .tabla-1 th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 2px;
      text-align: center;
  }

  .tabla-1 tr:nth-child(even) {
      border: 1px solid #aaa2a2;
      text-align: left;
      padding: 2px;
      text-align: center;
  }


  .tabla-2 {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 700px;
    font-size: 5px;
  }

  .tabla-2 td, .tabla-2 th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 2px;
      text-align: center;
  }

  .tabla-2 tr:nth-child(even) {
      background-color: #dddddd;
      text-align: center;
  }

  /* Tabla 1*/

  .tabla-3 {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin: -10px 0 0 0;
    font-size: 6px;
  }

  .tabla-3 td, .tabla-3 th {
      border: 1px solid #ffffff;      
      padding: 2px;      
  }

  .tabla-3 tr:nth-child(even) {
      border: 1px solid #ffffff;     
      padding: 2px;     
  }

   /* Tabla 4*/

   .tabla-4 {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    font-size: 6px;
  }

  .tabla-4 td, .tabla-4 th {
      border:solid #000000;    
      text-align: center;    
  }

  .tabla-4 tr:nth-child(even) {
      border:solid #000000;     
      text-align: center;    
  }

.logo-edo-cot{
  width: 100px;
  display: block;
  margin: -20px 0 0 0;
}
.info_cliente{
  background-color: black; 
  color:#ffff; 
  text-align: right;
}
.resp_cliente{
  background-color: #dddddd; 
  text-align:left;
}
  </style>
</head>
<body>
<div class="container">

  <div class="content-datos">
    <table class="tabla-3">
      <tr>
        <th colspan="4" style="background-color: rgb(17, 1, 233); color:#ffff; text-aling: center;"><h2><strong><center>Orden de compra para Distribuidor</center></strong></h2></th>
      </tr>
      <tr>      
          <th>
            <img src="img/iusa_logo.png" alt="" height="70px;" width="70px;">
          </th>    
  
          <th><h1><strong>PORTAL DE PROMOTORIA IUSA</strong></h1></th>      
        
          <th>
          
          </th>      
        
          <th>
            <table>              
              <tr>
                <td>Folio</td>                
              </tr>   
              <tr>
                <td>{{$oportunidad['folio']}}</td>                
              </tr>           
            </table>            
          </th>
      </tr>
    </table>
    <br>
    
  </div>

  <!--fin-content-->
	  <!--fin-ontent-tabla-1-->
<div class="content-datos-tabla">
  <table class="tabla-1">
    <tr>
      <th colspan="4" style="text-align:left;"><strong>Promotor:</strong>Promotor 1</th>
    </tr>
    <tr>
      <th colspan="4" style="background-color:#b4b2b2;"><center><strong>DETALLE ORDEN DE COMPRA</strong></center></th>
    </tr>
    <tr>      
        <th><strong>{{$oportunidad['tipoUsuario']}}</strong></th>    

        <th><strong>{{$oportunidad['nombreUsuario']}}</strong></th>      
      
        <th><strong>TIPO DISTRIBUIDOR</strong></th>      
      
        <th><strong>{{$oportunidad['tipoDistribuidor']}}</strong></th>
    </tr>
    <tr>      
      <th><strong>DISTRIBUIDOR</strong></th>    

      <th><strong>{{$oportunidad['nombreDistribuidor']}}</strong></th>      
    
      <th><strong>FECHA</strong></th>      
    
      <th><strong>{{$oportunidad['fecha']}}</strong></th>
    </tr>
    <tr>      
      <th><strong>ORDEN DE COMPRA</strong></th>    

      <th><strong>{{$oportunidad['orden_compra']}}</strong></th>      
    
      <th><strong>FOLIO</strong></th>      
    
      <th><strong>{{$oportunidad['folio']}}</strong></th>
    </tr>
  </table>
<table class="tabla-2">    

  <tr>
    <th>#</th>
    <th>C??DIGO</th>
    <th>DESCRIPCI??N</th>                                           
    <th>U. CONFIRMADAS</th>                                      
  </tr>

      @if ($oportunidades_detalle == [])
        <tr>
          <td colspan="4"><center><span><h3>Sin resultados</h3></span></center></td>
        </tr>
        @endif

      @foreach ($oportunidades_detalle as $lista)
      <tr>
        <td>1</td> 
        <td>{{$lista['codigo_material']}} </td>                        
        <td>{{$lista['nombre_material']}}</td> 
        <td>{{$lista['unidades_confirmadas']}}</td>
        
	</tr>
   @endforeach
  <br>
  <tr>
    <td colspan="3" style="background-color : #dddddd;"></td>
    <td style="background-color : #dddddd;">TOTAL</td>
  </tr>
  <br>
  <tr>
    <td colspan="4" style="text-align: left;">
      <ul>
        <li type="circle">Cambio De Precios Sin Previo Aviso.</li>
        <li type="circle">Todos Los Productos Son S.P.V.(Salvo Previa Venta)</li>
        <li type="circle">No Se Respetar??n Precios Cotizados En Backorders,Pagos Por Adelantados O Anticipos.</li>
        <li type="circle">Se Facturar?? A Precio De Cotizaci??n COMEX Del D??a.</li>
        <li type="circle">El Tiempo De Entrega Empieza A Correr A Partir De Recibir Su Pedido En Firme Y Anticipo, No Contempla El Tiempo De Inspecci??n Por Parte De CFE.</li>
        <li type="circle">El Costo De La Inspecci??n Corre Por Cuenta Del Cliente.</li>
        <li type="circle">En Caso De Requerir Cr??dito Es Previa Autorizaci??n Y Tr??mites Ante Nuestro Departamento De Cr??dito Y Cobranza.</li>
        <li type="circle">El Empaque Cotizado Es Conforme Al Est??ndar Indicado, No Se Realiza Cortes De Los Empaques Est??ndar.</li>
        <li type="circle">La Vigencia De La Cotizaci??n Es De <strong>1</strong> D??as.</li>
        <li type="circle">Los Productos Se Entregan L.A.B.(Obra U Almac??n).</li>
      </ul>
    </td>
  </tr>
  <tr>
    <td colspan="4" style="background-color:#b4b2b2;">
      <h3><strong>COPYRIGHT(C)2021 GRUPO IUSA, S.A. DE C.V. TODOS LOS DERECHOS RESERVADOS</strong></h3>
    </td>
  </tr>

 </table> 
</div>	  
 
</div><!-- fin del container -->
</body>
</html>