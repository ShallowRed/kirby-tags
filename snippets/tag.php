<?php $attrs = A::extend(['class' => 'tag'], $attrs ?? []) ?>
<a <?php echo attr($attrs) ?>>
  <?php echo $label ?>
  <div class='tag__close'>
    <span class='tag__close-icon'></span>
  </div>
</a>
