	<div id="slider" class="nivoSlider">
		
	<a href="#"><img src="/images/banner/banner1.jpg" width="980" height="376" alt="banner" /></a>   	
	<a href="#"><img src="/images/banner/banner2.jpg" width="980" height="376" alt="banner" /></a>   	
	<a href="#"><img src="/images/banner/banner3.jpg" width="980" height="376" alt="banner" /></a>   
		 
		</div> 
        <hr />         
  <div id="slideshow">
    <div id="slidesContainer">
    				<div class="slide">
                                     <div class="cont-product">
                           <div class="img-produc">
                           <img src="/images/rota1.jpg" alt="Torre Catas de Chocolates " />
                           </div>
                           <h4 style="padding-top:15px; text-transform:capitalize; font-family:Tahoma, Geneva, sans-serif; color:#999;">
						   Torre Catas de Chocolates</h4>
                           <p> Inlcuye
Palets x 20 pz, Catas de chocolate x16 tabletas y Trufas Surtidas x 10 pz  </p>                            
                           <a href="/productodetalle">ver mas</a>
                       </div>
                                           <div class="cont-product">
                           <div class="img-produc">
                           <img src="/images/rota2.jpg" alt="Catas de Chocolate Origen Perú" />
                           </div>
                           <h4 style="padding-top:15px; text-transform:capitalize; font-family:Tahoma, Geneva, sans-serif; color:#999;">
						   Catas de Chocolate Origen Perú</h4>
                           <p> Una exclusiva selección de tabletas de complejos y  aromáticos chocolates Bitter con 4 di...</p>                            
                           <a href="#">ver mas</a>
                       </div>
                      </div><div class="slide">                     <div class="cont-product">
                           <div class="img-produc">
                           <img src="/images/rota3.jpg" alt="Torre Bombones y Trufas " />
                           </div>
                           <h4 style="padding-top:15px; text-transform:capitalize; font-family:Tahoma, Geneva, sans-serif; color:#999;">
						   Torre Bombones y Trufas</h4>
                           <p> Dos colecciones en una torre la cual incluye bombones de Autor x 20 pz y Trufas surtidas x ...</p>                            
                           <a href="#">ver mas</a>
                       </div>
                                           <div class="cont-product">
                           <div class="img-produc">
                           <img src="/images/rota4.jpg" alt="Cofret Choco-cookies" />
                           </div>
                           <h4 style="padding-top:15px; text-transform:capitalize; font-family:Tahoma, Geneva, sans-serif; color:#999;">
						   Cofret Choco-cookies</h4>
                           <p> Cofret con 5 Choco-cookies Amaretti elaborados con  pasta de almendras, nougat y chocolate  </p>                            
                           <a href="#">ver mas</a>
                       </div>
                                         
                  </div>
    
    </div>
  </div>
  <!-- Slideshow HTML -->
  <script type="text/javascript">
  $(document).ready(function(){
  var currentPosition=0;var slideWidth=940;var slides=$('.slide');var numberOfSlides=slides.length;$('#slidesContainer').css('overflow','hidden');slides.wrapAll('<div id="slideInner"></div>').css({'float':'left','width':slideWidth});$('#slideInner').css('width',slideWidth*numberOfSlides);$('#slideshow').prepend('<span class="control" id="leftControl">Clicking moves left</span>').append('<span class="control" id="rightControl">Clicking moves right</span>');manageControls(currentPosition);$('.control').bind('click',function(){currentPosition=($(this).attr('id')=='rightControl')?currentPosition+1:currentPosition-1;manageControls(currentPosition);$('#slideInner').animate({'marginLeft':slideWidth*(-currentPosition)})});function manageControls(a){if(a==0){$('#leftControl').hide()}else{$('#leftControl').show()}if(a==numberOfSlides-1){$('#rightControl').hide()}else{$('#rightControl').show()}}
  $('#slider').nivoSlider({effect: 'fade'});
  });
  </script>
