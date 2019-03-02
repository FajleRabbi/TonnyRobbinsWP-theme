<div class="erobbins-blog-filter-search">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
				if(class_exists('SearchAndFilter')){
					echo do_shortcode( '[searchandfilter fields="search,category"]' );
				}
				?>
			</div>
		</div>
	</div>
</div>