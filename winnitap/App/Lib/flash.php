<?php if(count($flash)) : ?>

<?php foreach($flash as $key => $alert) : ?>

<div class="flash <?=e($key) ?>">
    <span><?=e($alert) ?></span>
</div>

<?php endforeach; ?>

<?php endif; ?>