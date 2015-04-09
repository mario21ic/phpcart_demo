<?php $this->load->view('tpl/categorias') ?>
    
    
<div id="cuadro3_centro">
  <div class="titulo">Pedidos Corporativos</div>
  <div id="page">

    <!-- Categorias -->
		
    <!-- PRODUCTOS -->
    <?php foreach($items as $item): ?>
    <div class="cuadro_pro">
        <div class="cuadro_pro_r1"><?php echo $item->nombre ?></div>
        <div class="cuadro_pro_r2">
            <a href="/chocolate/<?php echo $item->id.'-'.$categorias[$item->categoria]->slug.'-'.$item->slug ?>" title="categoría">
                <img width="133" height="131" border="0" src="/img/<?php echo $item->foto ?>" alt="Arreglos Originales" />
            </a>
        </div>
        <div class="cuadro_pro_r3">
            <div class="precio_pro"><span style="font-size:12px;font-weight:bold">$./</span> <?php echo $item->precio ?></div>
            <div class="detalle_pro">
                <a target="_self" href="producto-1.html">Ver <img width="19" height="12" border="0" src="/images/lupa.png"></a><br><a href="javascript: void(0)" class="izq adddetalle">Comprar <img width="19" height="12" border="0" src="/images/carro.png"></a>
            </div>
        </div>
    </div>
    <?php endforeach ?>
    <!-- PRODUCTOS -->
  </div>
</div>
