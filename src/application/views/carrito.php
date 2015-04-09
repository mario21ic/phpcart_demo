<?php $this->load->view('tpl/categorias') ?>
    <div class="lista_pd">
    	<div class"lista">
                <form action="#" method="post" accept-charset="utf-8">
                <table summary="lista" width="756">
                      <thead>
                        <tr>
                          <th colspan="2">Descripci&oacute;n del producto</th>
                          <th>Precio</th>
                          <th>Cantidad</th>
                          <th>Actualizar</th>
                          <th>Eliminar</th>
                          <th>Subtotal</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <td align="center" colspan="5"></td>
                          <td align="center" class="stylo">Subtotal</td>
                          <td align="center" class="stylo"><?php echo $this->cart->total() ?></td>
                        </tr>
                        <tr>
                          <td align="center" colspan="5"></td>
                          <td align="center" class="stylo">Delivery $/.</td>
                          <td align="center" class="stylo">0.00</td>
                        </tr>
                        <tr>
                          <td align="center" colspan="5"></td>
                          <td align="center" class="stylo">Total $ <br /><small style="font-size:10px; color:#CCC;"></small></td>
                          <td align="center" class="stylo">0.00 USD</td>
                        </tr>
                      </tfoot>
                      <tbody>
               <?php $i = 1; ?>
               <?php foreach ($this->cart->contents() as $items): ?>
               <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                        <tr style="background:#ffffff">
                          <td align="center">
                          <img src="/img/<?php echo @$items['foto'] ?>" alt="producto" />
                          </td>
                          <td>
                              <strong><?php echo $items['name'] ?></strong><br />
                          </td>
                          <td align="center"><?php echo $items['price'] ?></td>
                          <td align="center">
                          <input type="text" name="qty[]" value="<?php echo $items['qty'] ?>" maxlength="3" size="5" class="unidad" id=""  />						  <div class="mas-o-menos">
                          <a class="mas" href="javascript: void(0)" id="mas97c484ca9f7d57446b480399b37244e0"><img src="/images/up.jpg" alt="up" /></a>
                          <a class="menos" href="javascript: void(0)" id="menos97c484ca9f7d57446b480399b37244e0"><img src="/images/dow.jpg" alt="up" /></a>
                          </div>
                        </td>
                          <td align="center">
                          <a href="javascript: void(0)" class="submit"><img src="/images/actualizar.png" alt="Actulizar" /></a>
                           </td>
                           <td align="center"><a href="lista/remove/97c484ca9f7d57446b480399b37244e0"><img src="/images/eliminar.png" alt="eliminar" /></a>						   </td>
                   <td align="center"><?php echo $items['price']*$items['qty'] ?></td>
               </tr>
               <?php endforeach ?>
              </tbody>
    </table>
    </form>
       


        </div>
        <div class="checkout">
            <a href="registro.html" ><img src="/images/ahora.png" alt="Registrar Pago" /></a>
            <a href="celebraciones-1.html" ><img src="/images/seguir.png" alt="Seguir Comprando" /></a>
        </div>
    </div>

<script>
$(function(){
	$("a.mas").bind("click", function(event){  var x = explode('mas',this.id); mas1(1,$("#cantidad"+x[1])); });  
	$("a.menos").bind("click", function(event){   var x = explode('menos',this.id); mas1(0,$("input#cantidad"+x[1])); });
	$(".fload").limitkeypress({ rexp: /^[+]?\d*\.?\d*$/ });
	$('a.submit').click(function() { 	$('form').submit();	});
});
</script>
