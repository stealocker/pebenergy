    <?php
    $items = $attributes['items'];

    if ($items) : ?>
        <section class="descriptions grid">
            <div class="descriptions__overview">
                    <?php
                    $id = 0;
                    foreach ($items as $index => $item) : 
                    $active = $index === 0 ? ' descriptions__overview__item--active' : '';?>
                        <div class="descriptions__overview__item<?php echo $active ?>" data-id="<?php echo $id ?>">
                            <p class="text-bigger"><?php echo esc_html($item['headline']); ?></p>
                            <div class="line"></div>
                    </div>
                    <?php
                        $id++;
                    endforeach;

                    $id = 0; ?>
            </div>
            <div class="descriptions__detail">
                <?php foreach ($items as $index => $item) :
                $active = $index === 0 ? ' descriptions__detail__item--active' : '';?>
                    <div class="descriptions__detail__item<?php echo $active ?>" data-id="<?php echo $id ?>">
                        <div class="image-wrapper">
                            <img src="<?php echo esc_url($item['img']['url']); ?>" alt="<?php echo esc_attr($item['img']['alt']); ?>">
                        </div>
                        <p class="text-bigger"><?php echo esc_html($item['abstract']); ?></p>
                        <?php echo $item['text']; ?>
                    </div>
                <?php
                    $id++;
                endforeach;
                $id = 0; ?>
            </div>
            </section>
    <?php endif; ?>