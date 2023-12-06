<?php
/**
 * All of the parameters passed to the function where this file is being required are accessible in this scope:
 *
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package bts
 */

?>
<section <?php echo get_block_wrapper_attributes(['class' => 'bts-primary-hero']); // phpcs:ignore ?>>
	<div class="bts-primary-hero__content">
		<h2 class="bts-primary-hero__title">
			<?php echo wp_kses_post($attributes['title']['text']); ?>
		</h2>
		<p class="bts-primary-hero__body">
			<?php echo wp_kses_post($attributes['body']); ?>
		</p>
		<?php if (isset($attributes['cta']['url']) && true === $attributes['cta']['show']) : ?>
			<a href="<?php echo esc_url($attributes['cta']['url']); ?>" class="bts-primary-hero__link wp-element-button">
			<?php echo esc_html($attributes['cta']['text']); ?>
			</a>
		<?php endif; ?>
	</div>
</section>
