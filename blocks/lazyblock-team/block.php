<section class="team grid">
    <h2><?php echo esc_html($attributes['headline']); ?></h2>
    <div class="team__member-wrapper grid">
        <div class="teammember teammember--one grid">
            <?php if (isset($attributes['img-one']['url'])) : ?>
                <div class="teammember__img-wrapper">
                    <img src="<?php echo esc_url($attributes['img-one']['url']); ?>"
                        alt="<?php echo esc_attr($attributes['img-one']['alt']); ?>">
                </div>
            <?php endif; ?>
            <div class="teammember__content-wrapper">
                <h3 class="h2"><?php echo esc_html($attributes['name-one']); ?></h3>
                <p><?php echo esc_html($attributes['text-one']); ?></p>
            </div>
        </div>
        <div class="teammember teammember--two grid">
            <?php if (isset($attributes['img-two']['url'])) : ?>
                <div class="teammember__img-wrapper">
                    <img src="<?php echo esc_url($attributes['img-two']['url']); ?>"
                        alt="<?php echo esc_attr($attributes['img-two']['alt']); ?>">
                </div>
            <?php endif; ?>
            <div class="teammember__content-wrapper">
                <h3 class="h2"><?php echo esc_html($attributes['name-two']); ?></h3>
                <p><?php echo esc_html($attributes['text-two']); ?></p>
            </div>
        </div>
    </div>
    <div class="team__text">
<p class="text-bigger"><?php echo esc_html($attributes['text']); ?></p>
    </div>
</section>