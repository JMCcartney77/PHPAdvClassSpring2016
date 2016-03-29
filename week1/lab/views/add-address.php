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
//        require_once './functions/dbconnect.php';
//        require_once './functions/until.php';
//        
            // Declare Variables
            $fullname = filter_input(INPUT_POST, 'fullname');
            $email = filter_input(INPUT_POST, 'email');
            $addressline1 = filter_input(INPUT_POST, 'addressline1');
            $city = filter_input(INPUT_POST, 'city');
            $state = filter_input(INPUT_POST, 'state');
            $zip = filter_input(INPUT_POST, 'zip');
            $birthday = filter_input(INPUT_POST, 'birthday');

//        $address = getAllAddresses;
            // Regex for Validation
            $regexfullname = '/^[^<,\"@/{}()*$%?=>:|;#]*$/i';
            $regexemail = '/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/';
            $regexaddressline1 = '/^([0-9]+ )?[a-zA-Z ]+$/';
            $regexcity = '/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/';
            $regexzip = '/^[0-9]{5}(?:-[0-9]{4})?$/';
            $regexbirthday = '/^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/';
            $error = array();



            include './view-address.php';
            ?>
        </div>
    </body>
</html>
