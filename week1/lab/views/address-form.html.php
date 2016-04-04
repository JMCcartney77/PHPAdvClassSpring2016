<div class="container">
    <h1>Address</h1>
    <form action="#" method="post"> 
        <div class="well well-sm">
            <!--//Form to collect Address data --> 
            <div class="form-group">Full Name:</div> <input name="fullname" value="<?php echo $fullname ?>" class="form-control" />
            <div class="form-group">Email:</div> <input name="email" value="<?php echo $email ?>" class="form-control"/> <br />
            <div class="form-group">Address:</div> <input name="address" value="<?php echo $address ?>" class="form-control"/>
            <div class="form-group">City:</div> <input name="city" value="<?php echo $city ?>" class="form-control"/>
            <div class="form-group">State:</div> <input name="state" value="<?php echo $state ?>" class="form-control"/>
            <div class="form-group">ZIP:</div> <input name="zip" value="<?php echo $zip ?>" class="form-control"/>
            <div class="form-group">Birthday:</div> <input type="date" name="birthday" value="<?php echo $birthday ?>" class="form-control"/>
            <input type="submit" value="submit" class="btn btn-primary btn-move" />
        </div>
        <input type="submit" value="submit" class="btn btn-success" />
        </div>
    </form>
