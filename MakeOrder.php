<!-- <!DOCTYPE html>
<meta charset="utf8"> -->
<?php
    if (isset($_POST)) {
        print("Имя: " . $_POST['nameInput']);
        print("<br>Фамилия: " . $_POST['secondNameInput']);
        print("<br>Отчество: " . $_POST['lastNameInput']);
        print("<br>Телефон: " . $_POST['phoneInput']);

        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';  //not showing an alert box.
        echo '</script>';
    }
?>