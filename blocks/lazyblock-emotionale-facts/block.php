<div class="emotional-facts grid">
    <div class="emotional-facts__headline">
        <h2><?php echo esc_html($attributes['headline-one']); ?> <span class="emotional-facts__headline--span"><?php echo esc_html($attributes['headline-two']); ?></span> <?php echo esc_html($attributes['headline-three']); ?></h2>
    </div>
    <?php foreach ($attributes['facts'] as $item): ?>
        <div class="emotional-facts__fact">
            <p class="text-super"><?php echo esc_html($item['fact-number']); ?></p>
            <p class="text-bigger"><?php echo esc_html($item['fact-name']); ?></p>
        </div>
    <?php endforeach; ?>
    <?php if (isset($attributes['img-one']['url'])) : ?>
        <div class="emotional-facts__img">
            <img src="<?php echo esc_url($attributes['img-one']['url']); ?>"
                alt="<?php echo esc_attr($attributes['img-one']['alt']); ?>">
        </div>
    <?php endif; ?>
    <?php if (isset($attributes['img-two']['url'])) : ?>
        <div class="emotional-facts__img">
            <img src="<?php echo esc_url($attributes['img-two']['url']); ?>"
                alt="<?php echo esc_attr($attributes['img-two']['alt']); ?>">
        </div>
    <?php endif; ?>
</div>