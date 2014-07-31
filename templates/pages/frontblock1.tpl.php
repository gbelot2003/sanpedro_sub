<?php 
global $language_content; 
if($language_content->language == "es"){
	$hotels = "/sanpedrosula/es/con-quien/hoteles";
	$rest = "/sanpedrosula/es/con-quien/restaurantes";
	$tour = "/sanpedrosula/es/con-quien/tour-operadores";
	$tran = "/sanpedrosula/es/con-quien/transportes";
} else {
	$hotels = "/sanpedrosula/en/with-whom/hotels";
	$rest = "/sanpedrosula/en/with-whom/restarants";
	$tour = "/sanpedrosula/en/with-whom/tour-operator";
	$tran = "/sanpedrosula/en/with-whom/transports";
}
?>
<div class="row">		
		<div class="large-6 small-12 columns">
			<div class="">
				<h2 class="front-title"><span class="portal">San Pedro Sula</span></h2>
				<div>
					<h5 class="guara"><?php print t("embark progress") ?></h5>
				</div>
				
					<div class="img-h h"><a title="<?php print t("Hotels") ?>" href="<?php print $hotels ?>">Hotel</a></div>
					<div class="img-t h"><a title="<?php print t("Transport") ?>" href="<?php print $tran ?>">Transportes</a></div>
					<div class="img-o h"><a title="<?php print t("Restaurants")?>" href="<?php print $rest ?>">Restaurantes</a></div>
					<div class="img-s h"><a title="<?php print t("Tour")?>" href="<?php print $tour ?>">Tour Operador</a></div>
			</div>
			
			<div id="slider-destiny">
				<?php print views_embed_view('views_front', $display_id = 'block') ?>
			</div>
		</div>
		
		<div class="large-6 small-12 columns">
			<div class="row">

				<?php print views_embed_view('taxonomias_frontpage', $display_id = 'block') ?>
				
				<div class="large-12 columns">
					<?php print views_embed_view('views_front', $display_id = 'block_1') ?>
				</div>
				
				<div class="large-5 columns">
				</div>
			</div><!-- end row -->
		</div>
		
	</div>
</div>

