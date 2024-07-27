<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ろくまる農園</title>
</head>
<body>
    <?php
    $staff_name = $_POST['name'];
    $staff_pass = $_POST['pass'];
    $staff_pass2 = $_POST['pass2'];

    $staff_name = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
    $staff_pass = htmlspecialchars($staff_pass, ENT_QUOTES, 'UTF-8');
    $staff_pass2 = htmlspecialchars($staff_pass2, ENT_QUOTES, 'UTF-8');

    if($staff_name==''){
        echo "スタッフ名が入力されていません。<br>";
    } else {
        echo "スタッフ名：";
        echo $staff_name;
        echo "<br>";
    }

    if($staff_pass=="") {
        echo "パスワードが入力されていません。";
    }

    if($staff_pass != $staff_pass2) {
        echo "パスワードが一致しません。";
    }

    if($staff_name==""||$staff_pass==""||$staff_pass!=$staff_pass2) {
        echo "<form>";
        echo '<input type="button" onclick="history.back()" value="戻る">';
        echo "</form>";
    } else {
        $staff_pass = md5($staff_pass);
        echo '<form method="post" action="staff_add_done.php">';
        echo '<input type="hidden" name="name" value="'.$staff_name.'">';
        echo '<input type="hidden" name="pass" value="'.$staff_pass.'">';
        echo "<br>";
        echo '<input type="button" onclick="history.back()" value="戻る">';
        echo '<input type="submit" value="OK">';
        echo "</form>";
    }
    ?>
</body>
</html>