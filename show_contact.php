<?php
$status     =   $_POST['status'];
$title      =   $_POST['title'];
$email      =   $_POST['email'];
$nickname   =   $_POST['nickname'];
$gender     =   $_POST['gender'];
$content    =   $_POST['content'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show_contact</title>
</head>
<body>
    <p>Status: <?php 
    if ($status == "Urgent") {
        # code...
    echo "<font color=red size='10pt'>$status</font>";
    }
    else echo $status;
    ?></p>
    <p>Title: <?php echo $title;?></p>
    <p>Email_address: <?php echo $email;?></p>
    <p>Nickname: <?php echo $nickname;?></p>
    <p>Gender: <?php echo $gender;?></p>
    <p>Content: <?php echo $content;?></p>
    <p><?php echo "<font color=blue>joshhsu</font>"; ?></p>
</body>
</html>