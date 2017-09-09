<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Telephone Validation</title>
    </head>
    <body>
        <?php
            $error = "";
            if(array_key_exists("tbMobileNumber", $_POST)) {
                if(!preg_match("/^[0-9]{10}$/", $_POST["tbMobileNumber"]))  {
                    $error = "Please Enter a Valid Number!";
                 }
            }
        // put your code here
        ?>
        <form action="index.php" method="POST">
            <label for="tbMobileNumber">Phone Number:</label>
            <input type="text" placeholder="Enter your mobile number" name="tbMobileNumber" maxlength="10" required>
            <span style="background: red; text-transform: uppercase; color: yellow" class="warning"> <?php echo $error; ?></span><br><br>
            <label for="tbEmailAddress">Email Address:</label>
            <input type="email" placeholder="Enter your email address" name="tbEmailAddress" required><br><br/>
            <input type="submit" value="Submit">
        </form>
    </body>


</html>
