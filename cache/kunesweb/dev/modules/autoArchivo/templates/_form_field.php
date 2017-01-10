<?php if ($field->isPartial()): ?>
<?php include_partial('archivo/'.$name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php elseif ($field->isComponent()): ?>
<?php include_component('archivo', $name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php else: ?>
<div class="<?php echo $class ?><?php $form[$name]->hasError() and print ' errors' ?> form-group">
    
    <?php echo $form[$name]->renderLabel($label) ?>
    <div class="content"><?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?></div>

    <?php if ($help): ?>
    <div class="help"><?php echo __($help, array(), 'messages') ?></div>
    <?php elseif ($help = $form[$name]->renderHelp()): ?>
    <div class="help"><?php echo $help ?></div>
    <?php endif; ?>
    <span class="error">
        <?php echo $form[$name]->renderError() ?>
    </span>
</div>
<?php endif; ?>
