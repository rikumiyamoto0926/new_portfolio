<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/new_portfolio/css/destryle.css">
    <link rel="stylesheet" href="/new_portfolio/css/common.css">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Document</title>
</head>
<body>
    <div class="background">
        <div class="header">
            <h3>Contact</h3>
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
            <p class="word1">From work to jokes, I'm waiting for your contact here!!</p>
            <p class="word2">Please self-confess in the form here that you have hacked my personal information<br><br>
                We look forward to a fun message</p>

            <form action="../mail/email.php" method="post">

                    <label class="form" id="form1">
                        name =<input class="name-form" type="text" name="name">
                    </label>

                    <label class="form" id="form2">
                        email =<input class="email-form" type="text" name="email">
                    </label>

                    <label class="form" id="form3">
                        message =<textarea class="message-form" type="text" name="message" cols="40" rows="10"></textarea>
                    </label>

                    <div class="button">
                        <label id="send">
                            <input class="send-button" type="submit" value="Send">
                        </label>
                    </div>
            </form>

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