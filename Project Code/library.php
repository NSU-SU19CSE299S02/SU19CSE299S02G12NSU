<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<?php

    $connection = new mysqli('localhost', 'root', '', 'bus route'); // Database Connection

    $error_flag = 0;
    $result;
    if ($connection->connect_error) {
        die('connection failed: '.$connection->connect_error);
    }
  function secure($unsafe_data)   //Making safe string
    {
        return htmlentities($unsafe_data);
    }


  function login($email_id_unsafe, $password_unsafe, $table = 'user') //Checking email and password
    {
        global $connection;

        $email_id = secure($email_id_unsafe);
        $password = secure($password_unsafe);

        $sql = "SELECT COUNT(*) FROM $table WHERE email = '$email_id' AND password = '$password';";

        $result = $connection->query($sql);

        $num_rows = (int) $result->fetch_array()['0'];

        if ($num_rows > 1) {
            //send email to sysadmin that my site has been hacked
              return 0;
        } elseif ($num_rows == 0) {
            echo status('no-match');

            return 0;
        } else {
            echo "<div class='alert alert-success'> <strong>Well done!</strong> Logged In</div>";
            $_SESSION['username'] = $email_id;

           
            return 1;
        }
    }
