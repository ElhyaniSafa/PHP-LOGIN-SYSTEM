<?php

session_start();

/* =====================
   INSCRIPTION
===================== */
if (isset($_POST['sinscrire'])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $_SESSION['user'] = [
        "name" => $name,
        "email" => $email,
        "password" => $hashedPassword
    ];

    header("Location: connection.php");
    exit;
}

/* =====================
   LOGIN
===================== */
if (isset($_POST['connecter'])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    if (isset($_SESSION['user'])) {

        $user = $_SESSION['user'];

        if ($user['email'] == $email) {

            if (password_verify($password, $user['password'])) {

                header("Location: home.php");
                exit;

            } else {
                echo "Incorrect password";
            }

        } else {
            echo "Email not found";
        }

    } else {
        echo "No user registered";
    }
}

?>
