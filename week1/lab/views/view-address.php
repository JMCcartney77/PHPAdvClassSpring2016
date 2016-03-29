<?php if ( count($address) > 0 ) : ?>
<h1>Address</h1>
<ul>
<?php foreach( $addresses as $key => $values ) : ?>
    <li><?php echo $values['address']; ?> </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
