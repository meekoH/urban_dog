<div class="ig-section">
	<div class="ig-wrap">
		<?php
			$i = 0;
			foreach ($result->data as $post) {
				if ($i == 6) break;
				$i++;
		?>
		<!-- Renders images. @Options (thumbnail,low_resolution, high_resolution) -->

		<a href="https://instagram.com/urbandoghq/" target="_blank" data-gallery><img src="<?php echo $post->images->low_resolution->url; ?>" class="ig-img"></a>
		<?php
			}
		?>
		<div class="clear"></div>
	</div>
	<div class="instagram-banner">
		Click the Images to View on Instagram
	</div>
</div>