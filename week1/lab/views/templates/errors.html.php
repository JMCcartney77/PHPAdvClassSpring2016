<?php if (is_array($error) && count($error) > 0) : ?>
    <?php foreach ($error as $err): ?>
        <div class="alert alert-warning alert-size"><p> <?php echo $err; ?> </p></div>
    <?php endforeach; ?>
<?php endif; ?>