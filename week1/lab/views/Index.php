<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="../../bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="well well-lg">
            <div class="jumbotron">
                <h2>Advanced PHP Week 1</h2> 
            </div>
            
            <?php
            // put your code here
            // *********************
            // Good practice steps!!!
//        1. Collect Data
//        2. Verify Data
//        3. Process/Do something with it
            require_once '../functions/dbconnect.php';
            require_once '../functions/until.php';
//        
            // Declare Variables
            $fullname = filter_input(INPUT_POST, 'fullname');
            $email = filter_input(INPUT_POST, 'email');
            $addressline1 = filter_input(INPUT_POST, 'addressline1');
            $city = filter_input(INPUT_POST, 'city');
            $state = filter_input(INPUT_POST, 'state');
            $zip = filter_input(INPUT_POST, 'zip');
            $birthday = filter_input(INPUT_POST, 'birthday');
//          $addresss = getAllAddresses();
            // Regex for Validation
            $regexfullname = '/^[^<,\"@\/{}()*$%?=>:|;#]*$/i';
            $regexaddressline1 = '/^([0-9]+ )?[a-zA-Z ]+$/';
            $regexcity = '/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/';
            $regexzip = '/^[0-9]{5}(?:-[0-9]{4})?$/';
            $error = array();
           

//          Add else if here

            if (isPostRequest()) {
                //Repeat for each field
                if (!preg_match($regexfullname, $fullname)) {
                    $error[] = 'Name is not valid';
                }
                if (empty($email)) {
                    $error[] = 'Email needed';
                }
                if (!preg_match($regexaddressline1, $addressline1)) {
                    $error[] = 'Address needed';
                }
                if (!preg_match($regexcity, $city)) {
                    $error[] = 'City is Empty';
                }
                if (empty($state)) {
                    $error[] = 'State is Empty';
                }
                if (!preg_match($regexzip, $zip)) {
                    $error[] = 'Zip is not valid';
                }
                if (empty($birthday)) {
                    $error[] = 'Birthday is Empty';
                }
                //$email 
                if (!filter_var($email, FILTER_VALIDATE_EMAIL) === true) {
                    $error[] = "Email is not valid";
                }
//                if (count($error) && count($error) > 0) {
//                    $error = false;
//                    foreach ($error as $err) {
//                        echo '<div class="alert alert-warning alert-size"><p>', $err, '</p></div>';
//                    }
//                }
                //WORK ON THIS NEXT!!!!!!!!!
                //If successfull output "Address Added"
                if ($isValid) {
                    addAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday);
                    echo '<div class="alert alert-success alert-size"><p>Address Added</p></div>';
                    $fullname = '';
                    $email = '';
                    $address = '';
                    $city = '';
                    $state = '';
                    $zip = '';
                    $birthday = '';
                }
            }

            include './templates/errors.html.php';
            include '../views/messages.html.php';
            include '../views/address-form.html.php';
            include '../views/view-address.php';
            ?>
        </div>
    </body>
    <div class="shift">
        <a href="../Index.php">Click here</a> to go back to the main page.
    </div>
</html>
