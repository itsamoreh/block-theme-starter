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
    <h3 class="bts-primary-hero__title">
        <?php echo wp_kses_post($attributes['title']); ?>
    </h3>
    <p class="bts-primary-hero__body">
        <?php echo wp_kses_post($attributes['body']); ?>
    </p>
    <?php if (isset($attributes['showCtaLink']) && true === $attributes['showCtaLink']) : ?>
        <a href="<?php echo esc_url($attributes['ctaLink']); ?>" class="bts-primary-hero__link">
        <?php echo esc_html($attributes['ctaText']); ?>
        </a>
    <?php endif; ?>
    <?php if (isset($attributes['showSecondaryCtaLink']) && true === $attributes['showSecondaryCtaLink']) : ?>
        <a href="<?php echo esc_url($attributes['ctaSecondaryLink']); ?>" class="bts-primary-hero__link">
        <?php echo esc_html($attributes['ctaSecondaryText']); ?>
        </a>
    <?php endif; ?>
</section>
