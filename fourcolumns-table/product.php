<!-------------------------------------------------------------------->
<div class="product">

	<div class="product_image">
		<a href="<?php echo get_permalink( $post->ID ); ?>"><img src="<?php echo $post->thumbnail; ?>"
		                                                         class="img-responsive"></a>
	</div>
	<div class="product_description">
		<h2 class="product_title"><?php echo $post->post_title ?></h2>

		<p style="color:<?php echo $textColor ?>">
			<?php if ( $this->options->showDescription ) { ?>
				<?php echo $this->prepare( ( $this->options->useShortDescription ) ? $post->post_excerpt : $post->post_content ); ?>
			<?php } ?>

		</p>

		<div class="price">
			<?php if ( $this->options->showPrice ) { ?>
				<?php echo $product->get_price_html(); ?>
			<?php } ?>
			<?php if ( ( $this->options->showSKU ) && ( strlen( $product->get_sku() ) > 0 ) ) { ?>
				<span class="SKU">(<?php echo $product->get_sku(); ?>)</span>
			<?php } ?>
		</div>


		<?php if ( ( get_option( 'pdfcat_showVariations' ) ) && ( $hasVariations ) ) { ?>


			<ul>
				<?php foreach ( $variations as $label => $options ) { ?>
					<li><?php echo $label; ?>:<?php echo implode( ', ', $options ) ?></li>
				<?php } ?>
			</ul>
		<?php } ?>

	</div>
</div>