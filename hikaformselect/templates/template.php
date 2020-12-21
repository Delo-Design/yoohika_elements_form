<?php

$el = $this->el('div', [
    'class' => [
        'hika-select'
    ]
]);

?>

<?= $el($props, $attrs) ?>
<?php if(isset($props['label']) && !empty($props['label'])) : ?>
    <label class="uk-form-label" for="input-<?php echo $attrs['data-id'] ?>"><?php echo $props['label'] ?></label>
    <div class="uk-form-controls">
        <?php endif;?>
        <select class="uk-select" name="<?php echo $props['inputname'] ?>">
        <?php foreach ($children as $child) : ?>
            <?= $builder->render($child, ['element' => $props]) ?>
        <?php endforeach ?>
        </select>
        <?php if(isset($props['label']) && !empty($props['label'])) : ?>
    </div>
    <?php endif;?>
<?= $el->end() ?>
