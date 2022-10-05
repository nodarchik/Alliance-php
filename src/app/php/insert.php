<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $errors = [];
    if (!$fname){
        $errors[]="First Name is required";
    }
    if (!$lname){
        $errors[]="Last Name is required";
    }
    if (!$email){
        $errors[]="Email is required";
    }

    if (empty($errors)){
        $statement = $pdo->prepare('INSERT INTO users (fname,lname,email)
               VALUES (:fname,:lname,:email)');
        $statement->bindValue(':fname', $fname);
        $statement->bindValue(':lname', $lname);
        $statement->bindValue(':email', $email);
        $statement->execute();

        header("Location:/");
        exit();
    }
}
