<?php

    declare(strict_types =1);
    // The function get_username is used to fetch the username from the database
    function get_username(object $pdo,string $username) {
        $query = "SELECT username FROM taskrabbit WHERE username=:username;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        return $results;

    }
    // The function get_email is used to fetch the email from the database
    function get_email(object $pdo,string $email) {
        $query = "SELECT email FROM taskrabbit WHERE email=:email;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        return $results;

    }
    // The function set_user is used to set or insert the user to the database
    function set_user(object $pdo,string $username,string $pwd,string $email) {
        $query = "INSERT INTO taskrabbit (username,pwd,email) VALUES(:username,:pwd,:email);";
        $stmt = $pdo->prepare($query);
        // The password_hash uses SHA256 to hash the password and it will make it more secure
        $options =[
            'cost' => 12
        ];
        $pwdHash = password_hash($pwd, PASSWORD_BCRYPT, $options);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwdHash);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        
    }
    function set_img($id,$target_file){
        $query= "INSERT INTO images VALUES ('$target_file')";
        mysql_query($query);
    }