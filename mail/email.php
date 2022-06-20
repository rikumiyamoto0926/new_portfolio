<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/destryle.css">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/email.css">
    <title>Document</title>
</head>
<body>
    <div class="background">
        <div class="header">
            <h3>GameOver</h3>
            <ul class="boxes">
                <li class="box"><div class="down">R</div></li>
                <li class="box"><div class="up">I</div></li>
                <li class="box"><div class="down">K</div></li>
                <li class="box"><div class="up">U</div></li>
                <li>
                    <div class="face">
                        <img id="pic" src="../img/smile.svg" alt="顔">
                    </div>
                </li>
            </ul>
        </div>

        <div class="Middle">

<?php
    $action = $_POST['action'];
    $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'],ENT_QUOTES);
    $message = htmlspecialchars($_POST['message'],ENT_QUOTES);

    $error = '';
    if ($name == '') {
        $error = $error.'<p>no name</p>';
    }
    if ($email == '') {
        $error = $error.'<p>no email</p>';
    }
    if ($message == '') {
        $error = $error.'<p>no message</p>';
    }
    if ($error != '') {
        echo $error;
        
        echo '<form method="post" action="../view/contact.php">';
        echo '<input type="submit" name="backbtn" value=" back to the contact">';
        echo '</form>';
    } else {
        $mail .= "以下の内容が送信されました。\n\n";
        $mail .= "【name】\n";
        $mail .= $name."\n\n";
        $mail .= "【email】\n";
        $mail .= $email."\n\n";
        $mail .= "【message】\n";
        $mail .= $message."\n\n";
        
        //日本語設定を行う
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $mail_to    = "rikuriku092677@gmail.com";          //送信先メールアドレス
        $mail_subject   = "rikuのポートフォリオ侵入者からメッセージが届きました";   //メールの件名
        $mail_body  = $mail;                //メールの本文
        $mail_header    = "from:"."riku.portfolio@gmail.com";           //フォームで入力されたメールアドレスを送信元として表示する
        
        $mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);
        
        if($mailsend == true) {
            echo '<p>Thank you for the message</p>';
            echo '<form method="post" action="../view/contact.php">';
            echo '<input type="submit" name="backbtn" value=" back to the contact">';
            echo '</form>';
        } else {
            echo '<p>Email has error。</p>';
            echo '<form method="post" action="../view/contact.php">';
            echo '<input type="submit" name="backbtn" value=" back to the contact">';
            echo '</form>';
        }
    }
?>

        </div>

        <footer>
            <ul>
                <li class="menu"><a class="foot" href="../view/top.php">Top</a></li>
                <li class="menu"><a class="foot" href="../view/works.php">Works</a></li>
                <li class="menu"><a class="foot" href="../view/about.php">About</a></li>
                <li class="menu"><a class="foot" href="../view/contact.php">Contact</a></li>
            </ul>
            <div class="now">
                <p id="Month"></p>
                <p id="date"></p>
                <p id="RealtimeClock"></p>
            </div>
        </footer>

    </div>
    <script src="../js/contact.js"></script>
    <script src="../js/common.js"></script>

</body>
</html>

