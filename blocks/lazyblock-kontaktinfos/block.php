<section class="contact-info grid">
    <div class="contact-info__address">
    <h2 class="text-bigger"><?php echo esc_html($attributes['name']); ?></h2>
    <p class="text-bigger"><?php echo esc_html($attributes['address']); ?></p>
    </div>
    <div class="contact-info__contact">
        <a class="text-bigger link--color-lilac" href="mailto:<?php echo esc_html($attributes['mail']); ?>" tabindex="0"><?php echo esc_html($attributes['mail']); ?></a>
        <a class="text-bigger link--color-blue" href="tel:<?php echo esc_html($attributes['phone']); ?>" tabindex="0"><?php echo esc_html($attributes['phone']); ?></a>
    </div>
</section>