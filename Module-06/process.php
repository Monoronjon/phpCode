<?php
session_start();

// Validate form inputs
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_FILES['profile_picture'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile_picture = $_FILES['profile_picture'];

  
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $filename = uniqid() . '_' . $profile_picture['name'];
        $upload_path = 'uploads/' . $filename;
        move_uploaded_file($profile_picture['tmp_name'], $upload_path);
        $filename = date('Y:m:d:') . '_' . $filename;
        $user_data = array($name, $email, $filename);
        $fp = fopen('users.csv', 'a');
        fputcsv($fp, $user_data);
        fclose($fp);

        // Set session and cookie variables
        $_SESSION['name'] = $name;
        setcookie('name', $name, time()+3600);

        header('Location: view_users.php');
        exit;
    } else {
        echo "Invalid email format.";
    }
} else {
    echo "All fields are required.";
}
?>
