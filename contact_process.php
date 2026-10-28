<?php

session_start();

require_once "config.php";


if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    header("Location: contact.php");
    exit;

}


$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$subject = trim($_POST["subject"] ?? "");
$message = trim($_POST["message"] ?? "");


/*
|--------------------------------------------------------------------------
| Validation
|--------------------------------------------------------------------------
*/

if ($name === "" || $email === "" || $subject === "" || $message === "") {

    $_SESSION["error"] = "Please fill in all required fields.";

    header("Location: contact.php");
    exit;

}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $_SESSION["error"] = "Please enter a valid email address.";

    header("Location: contact.php");
    exit;

}


if (
    strlen($name) > 100 ||
    strlen($email) > 150 ||
    strlen($phone) > 30 ||
    strlen($subject) > 200 ||
    strlen($message) > 2000
) {

    $_SESSION["error"] = "One or more fields are too long.";

    header("Location: contact.php");
    exit;

}


/*
|--------------------------------------------------------------------------
| Save Data
|--------------------------------------------------------------------------
*/

try {

    $sql = "
        INSERT INTO contact
        (
            name,
            email,
            phone,
            subject,
            message
        )
        VALUES
        (
            :name,
            :email,
            :phone,
            :subject,
            :message
        )
    ";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":name" => $name,
        ":email" => $email,
        ":phone" => $phone,
        ":subject" => $subject,
        ":message" => $message
    ]);


    /*
    |--------------------------------------------------------------------------
    | PRG Pattern
    |--------------------------------------------------------------------------
    */

    $_SESSION["success"] =
        "Thank you! Your message has been submitted successfully.";

    header("Location: contact.php");
    exit;


} catch (PDOException $e) {

    $_SESSION["error"] =
        "Sorry, your message could not be submitted. Please try again.";

    header("Location: contact.php");
    exit;

}