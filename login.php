<!--Could incorporate this into the index page yes?-->

<?php
require_once 'conn.php';

if (isset($_POST['login'])) {
    $username = sanitise_data($_POST['usrUsername']);
    $password = sanitise_data($_POST['usrPassword']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    var_dump($hashed_password);

    $query = $conn->query("SELECT COUNT(*) as count, * FROM `user` WHERE `username`='$username'");
    $row = $query->fetchArray();
    $count = $row['count'];

    if ($count > 0) {
        if (password_verify($password, $row['password'])) {
            echo "<div class='alert alert-success'>Login successful</div>";
        } else {
            echo "<div class='alert alert-danger'>Invalid username or password</div>";
        }
    }
}

function sanitise_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>