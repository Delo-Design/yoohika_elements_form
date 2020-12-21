<?php

$el = $this->el('div', [
    'class' => [
        'hika-checkboxes'
    ]
]);

$count = count($children);
$i = 1;
?>

<?= $el($props, $attrs) ?>
<?php if(isset($props['label']) && !empty($props['label'])) : ?>
    <label class="uk-form-label" for="input-<?php echo $attrs['data-id'] ?>"><?php echo $props['label'] ?></label>
    <div class="uk-form-controls">
        <?php endif;?>
        <?php foreach ($children as $child) : ?>
            <?= $builder->render($child, ['element' => $props]) ?><?php if(isset($props['linebreak']) && $props['linebreak'] && ($count !== $i)) : ?><br/><?php endif; ?>
            <?php $i++ ?>
        <?php endforeach ?>
        <?php if(isset($props['label']) && !empty($props['label'])) : ?>
    </div>
    <?php endif;?>
<?= $el->end() ?>
