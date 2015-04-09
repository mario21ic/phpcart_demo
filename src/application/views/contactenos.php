<div id="cuadro3_lateralIzq"><meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<div class="bar_catIzq"> <h2>Categorias</h2></div>
 <div style="width:190px; height:auto; float:left; margin-top:-8px; margin-left:6px; "> 
      <ul id="menu">
    	  
        <li>
        <a title="Para Regalar" href="para-regalar.html"> Para Regalar</a></li>        
      
		  
        <li>
        <a title="Para Ellos" href="celebraciones-especiales.html"> Celebraciones Especiales</a></li>              
		  
        <li>
        <a title="Pedidos Corporativos" href="pedidos-corporativos.html"> Pedidos Corporativos</a></li>        
		  
        <li>
        <a title="Chocolates para diabeticos" href="chocolate-para-diabeticos.html"> Chocolates para diabéticos</a></li>        
		  
        <li>
        <a title="Otros" href="otros.html"> Otros</a></li>        
       
    </ul> 

    
</div>	
	</div>
<div id="cont-contactenos">
        	<h2>Contáctenos</h2>

	<div id="texto">
    <p>Por que estamos para servirle escribanos informarse sobre nuestras ofertas y promociones, hacer comentarios y sugerencias, de la misma manera atenderemos sus consultas, inquietudes y/o información que requiera sobre nuestros productos.</p>
    <p>&nbsp;</p>
		<p>Calle Carlos Villarán 140, <br/>Torre Interbank - Piso 13.
Lima 13 - Perú.</p>
		<p>&nbsp;</p>
		<p>Telf: 995 46467<br />
		E-mail:Contacto@lucci.com</p>
	  <p>&nbsp;</p>
	</div>
        <div id="formulario">
            <form id="formID" name="contact" action="#" method="post">
             <label>Nombres:</label>
             <input type="text" name="nombre" class="required" id="req" />
             
                             
             <label>Telefono:</label>
             <input type="text" name="telefono" class="required number" id="req3" />
                        
              <label>Email:</label>
              <input type="text" name="email" class="required email" id="req4"    />
                        
              <label>Sugerencias:</label>
              <textarea name="consulta" rows="8" cols="30" ></textarea>
              <button type="submit">ENVIAR</button>            
            </form>
            <div id="msjfactura"></div>
            <script>
			$("#formID").validate({
				success: "valid",
				submitHandler: function(form){
					$.pdAJAX("#msjfactura","Enviando...","#",$(form).serialize(),function(j){
					$("div#msjfactura").text(j.text).addClass(j.div).removeClass("msg-loading");
					},"json");
					return false;
				}
			});
			</script>
    
</div>
<script>
$(function(){
	$("a.mas").bind("click", function(event){  var x = explode('mas',this.id); mas1(1,$("#cantidad"+x[1])); });  
	$("a.menos").bind("click", function(event){   var x = explode('menos',this.id); mas1(0,$("input#cantidad"+x[1])); });
	$(".fload").limitkeypress({ rexp: /^[+]?\d*\.?\d*$/ });
	$('a.submit').click(function() { 	$('form').submit();	});
});
</script>