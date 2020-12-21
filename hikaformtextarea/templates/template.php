<?php

$el = $this->el('div', [
    'class' => [
        'hika-textarea'
    ]
]);

?>

<?= $el($props, $attrs) ?>
    <?php if(isset($props['label']) && !empty($props['label'])) : ?>
        <label class="uk-form-label" for="texterea-<?php echo $attrs['data-id'] ?>"><?php echo $props['label'] ?></label>
        <div class="uk-form-controls">
    <?php endif;?>
            <textarea
                id="texterea-<?php echo $attrs['data-id'] ?>"
                class="uk-textarea <?php echo $props['inputcss'] ?>"
                name="<?php echo $props['inputname'] ?>"
                placeholder="<?php echo $props['inputplaceholder'] ?>"
                <?php if(!empty($props['inputrows'])) : ?>rows="<?php echo $props['inputrows'] ?>"<?php endif; ?>
            ></textarea>
    <?php if(isset($props['label']) && !empty($props['label'])) : ?>
        </div>
    <?php endif;?>
<?= $el->end() ?>
