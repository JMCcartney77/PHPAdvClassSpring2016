<div class="container">
    <h1>Address</h1>

    <form action="#" method="post"> 
<div class="well well-sm">
<!--//Form to collect Address data --> 
Full Name: <input name="fullname" value="<?php echo $fullname; ?>" /> <br /> <br />
Address: <input name="addressline1" value="<?php echo $addressline1; ?>" /> <br /><br />
City: <input name="city" value="<?php echo $city; ?>" /> <br /><br />
State: <input name="state" value="<?php echo $state; ?>" /> <br /><br />
Zip: <input name="zip" value="<?php echo $zip; ?>" /> <br /><br />
Email: <input name="email" value="<?php echo $email; ?>" /> <br /><br />
Birthday: <input type="date" name="birthday" value="<?php echo $birthday; ?>" /> <br /><br />

<input type="submit" value="submit" class="btn btn-success" />
</div>