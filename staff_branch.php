<?php 

if(isset($_POST['edit'])) {
    $staff_code = $_POST['staffcode'];
    header('Location: staff_edit.php');
    exit();
}

if(isset($_POST['delete'])) {
    $staff_code = $_POST['staffcode'];
    header('Location: staff_delte.php');
    exit();
}
?>