    <?php
    $items = $attributes['items'];

    if ($items) : ?>
        <div class="erklaerungen grid">
            <div class="erklaerungen__overview">
                <ul>
                    <?php
                    $id = 0;
                    foreach ($items as $item) : ?>
                        <li data-id="<?php echo $id ?>">
                            <?php echo esc_html($item['headline']); ?>
                        </li>
                    <?php
                        $id++;
                    endforeach;

                    $id = 0; ?>
                </ul>
            </div>
            <div class="erklaerungen__detail">
                <?php foreach ($items as $item) : ?>
                    <div>
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
        </div>
    <?php endif; ?>