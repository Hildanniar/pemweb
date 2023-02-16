<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        echo "Terima kasih untuk $name atas kritik dan sarannya";
    }
    ?>
</body>