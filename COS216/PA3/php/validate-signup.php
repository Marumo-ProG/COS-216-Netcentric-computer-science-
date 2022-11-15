<?php
    include "config.php";
    
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $validity = true;

    // validating the user name and surname information
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $validity = false;
    }
    if (!preg_match("/^[a-zA-Z-' ]*$/",$surname)) {
        $validity += false;
    }
    if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$email))
    {
        $validty = false;
    }

    // checking if the user exists in the database
    $query = "SELECT * FROM users WHERE surname='$surname' AND name='$name' AND email='$email'";
    $result = $db->query($query);

    //checking if the user exists
    if(!empty($result) && $result->num_rows > 0){
        echo "<script>alert('User Exists, please type your information again'); history.back();</script>";

    }
    else{
        // add the user to the database table
        if($validity == true){
            // hashing the password before storing it 
            $password = password_hash($password,PASSWORD_DEFAULT);
            $query = "INSERT INTO users (name, surname, email, password, apiKey) VALUES ('$name', '$surname', '$email', '$password', 'u20485001APIKEY')";
            if($db->query($query) === true){
                echo "<script>alert('Your account has been registered! your API Key is u20485001APIKEY');</script>";
                $login = true;
                echo "<script>location.href = '../index.php';</script>";
            }

            else
                echo "Error: " . $query . "<br>" . $connection->error;
        } else 
            echo "<script>alert('Server Validation Failed, Please check if you your data correctly'); history.back();</script>";
    }
    
?>