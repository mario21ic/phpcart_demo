<?php $this->load->view('tpl/categorias') ?>

<div id="cuadro3_centro">
  <div class="titulo">Para Regalar</div>
  <div id="page">
    <?php foreach($items as $item): ?>
    <div style="height:230px" class="cuadro_pro">
        <div class="cuadro_pro_r1"><?php echo $item->nombre ?></div>
        <div class="cuadro_pro_r2">
            <a href="/chocolate/<?php echo $item->id.'-'.$categorias[$item->categoria]->slug.'-'.$item->slug ?>" title="categoría">
                <img width="133" height="131" border="0" src="/img/<?php echo $item->foto ?>" alt="Arreglos Originales" />
            </a>
        </div>
        <div class="cuadro_pro_r3">
            <div style="margin-left:66px;margin-top:6px" class="detalle_pro">
                <a target="_self" href="enamorados.html" title="Arreglos Originales">Ver <img width="19" height="12" border="0" src="/images/lupa.png"></a>
            </div>
        </div>
    </div>
    <?php endforeach ?>
  </div>
</div>
