<div class="showcases">
    <div class="showcases__headline">
        <h2><?php echo esc_html($attributes['headline']); ?></h2>
    </div>
    <div class="showcases__content-wrapper grid">
        <?php foreach ($attributes['showcases'] as $item): ?>
            <div class="showcases__content">
                <?php if (isset($item['img']['url'])) : ?>
                    <div class="showcases__content__img">
                        <img src="<?php echo esc_url($item['img']['url']); ?>"
                            alt="<?php echo esc_attr($item['img']['alt']); ?>">
                        <?php if (isset($item['content'])) : ?>
                            <div class="showcases__content__additional">
                                <?php echo $item['content']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <h3><?php echo esc_html($item['name']); ?></h3>

            </div>
        <?php endforeach; ?>
        <div class="showcases__content showcases__content--cta">
            <div class="showcases__content__img flex">
                <h3>Sie und wir,<br>wär das was?</h3>
                <a class="button button--primary" href="#kontakt">Jetzt unverbindlich anfragen</a>
            </div>
        </div>

    </div>
</div>