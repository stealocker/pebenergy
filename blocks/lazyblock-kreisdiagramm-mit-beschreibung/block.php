<div class="circle-diagram grid">
    <div class="circle-diagram__text">
        <h2><?php echo esc_html($attributes['headline']); ?></h2>
        <p class="text-bigger"><?php echo esc_html($attributes['subline']); ?></p>
        <p><?php echo $attributes['text']; ?></p>
        <a class="link--arrow" href="<?php echo esc_url($attributes['link']); ?>">Zur technischen Produktbeschreibung</a>
    </div>
    <div class="circle-diagram__circle">
        <div class="circle-widget">

            <div class="circle">

                <svg viewBox="0 0 200 200" class="segments"></svg>

                <div class="center"></div>

                <div class="floating-text">
                    <?php
                    if (!empty($attributes['labels'])) :
                        foreach ($attributes['labels'] as $index => $item) :
                            $active = $index === 0 ? ' active' : '';
                    ?>
                            <span class="label<?php echo $active; ?>">
                                <?php echo esc_html($item['label'] ?? ''); ?>
                            </span>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>

            </div>

        </div>
    </div>


</div>