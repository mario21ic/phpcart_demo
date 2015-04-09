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
    <div id="desc-producto">
            <div id="sidebar-izq">
            <img src="/img/<?php echo $item->foto ?>"  />
        </a>
        </div>
        <div id="sidebar-der">
        <h3><?php echo $item->nombre ?></h3>
            <p><?php echo $item->resumen ?></p>
            <div class="compra">
                <div class="cantidad">
                    <span>Cantidad</span>
                        <form action="/carrito/add" method="post" id="frmaddcarro" style="margin:0px; padding:0px;">
                            <input type="text" name="cantidad" id="cantidad" value="1" />
                            <div class="cont_arw">
                                <div id="up"></div>
                                <div id="dw"></div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $item->id ?>" />
                        </form>
                </div>

                <p><span>Precio</span> $/. <?php echo $item->precio ?></p>				
                <a href="javascript: void(0)" class="izq adddetalle"><img src="/images/cesta.png" alt="agregar" /></a>
                <div class="social">

                </div>

<script>
$('a.adddetalle').click(function() {
    $('#frmaddcarro').submit();
});
</script>
            </div>
          <div style="width:220px; height:auto;margin-left: 14px; margin-top:10px; float:left; text-align:left;">

    <a href="#"><img width="23" height="23" border="0" class="social1" src="/images/s1.jpg"></a>
    <a target="_blank" href="#" title="facebook techocoquiero"><img width="23" height="23" border="0" class="social1" src="/images/s2.jpg"></a>
    <a target="_blank" href="#"><img width="23" height="23" border="0" class="social1" src="/images/s3.jpg"></a>
    <a target="_blank" href="#/" title="blog techocoquiero"><img width="23" height="23" border="0" class="social1" src="/images/s4.jpg"></a>

    </div>

            <div id="recomendados">
                <h2>Otras Sugerencias</h2>
                                            <div class="producto-re">
                            <a href="dia-del-padre.html">
                            <img src="/images/product2.jpg" alt="Estuche Tablets"/>
                            </a>
                            <h3><a href="#">Caja x 10 Trufas surtidas</a></h3>
                            </div>

                                                <div class="producto-re">
                            <a href="dia-del-padre.html">
                            <img src="/images/product3.jpg"/>
                            </a>
                            <h3><a href="#">Caja x 10 Trufas</a></h3>
                            </div>

          </div>			
        </div>
  </div>
