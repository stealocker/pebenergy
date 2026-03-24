<section class="hero-header grid">
    <div class="hero-header__content">
    <h1><?php echo esc_html($attributes['headline-one']); ?> <span class="hero-header__headline--span"><?php echo esc_html($attributes['headline-two']); ?></span> <?php echo esc_html($attributes['headline-three']); ?></h1>
    <p class="text-bigger">
<?php echo esc_html($attributes['subline']); ?>
</p>
<div class="hero-header__buttonwrapper">
    <?php if ( $attributes['button-one'] ) : ?>
    <a href="<?php echo esc_url( $attributes['button-one'] ); ?>"
       class="button button--primary">
        Jetzt unverbindlich anfragen
    </a>
<?php endif; ?>
    <?php if ( $attributes['button-two'] ) : ?>
    <a href="<?php echo esc_url( $attributes['button-two'] ); ?>"
       class="button button--secondary" target="_blank">
        Demo ausprobieren
    </a>
<?php endif; ?>
</div>
</div>

<?php if ( isset( $attributes['img']['url'] ) ) : ?>
        <div class="hero-header__img">
  <img src="<?php echo esc_url( $attributes['img']['url'] ); ?>"
       alt="<?php echo esc_attr( $attributes['img']['alt'] ); ?>">
       </div>
<?php endif; ?>

</section>