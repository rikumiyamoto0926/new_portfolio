<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/new_portfolio/css/destryle.css">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="/new_portfolio/css/top.css">
    <title>RIKU.宮本</title>
</head>
<body>
    <div class="background">
        <div class="header">
            <h3>Portfolio</h3>
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
            <div class="name">
                <h1 class="TextTyping">Riku Miyamoto</h1>
                <h2>Engineer</h2>
            </div>
            
                <div class="tree">
                    <ul class="structure">
                        <a class="topfile file_item">
                            <img class="file_img" id="top" src="../img/topsecret.svg" alt="file">
                            <p>Top</p>
                        </a>
                            <div class="line">
                                <img class="file-line" src="../img/file-line.svg" alt="ファイルの線">
                            </div>
                            <ul class="file">
                                <li class="file_item">
                                    <a class="works file_link">
                                        <img class="file_img" id="work" src="../img/topsecret.svg" alt="file">
                                        <p>Works</p>
                                    </a>
                                </li>
                                <li class="file_item">
                                    <a class="abouts file_link">
                                        <img class="file_img" id="about" src="../img/topsecret.svg" alt="file">
                                        <p>About</p>
                                    </a>
                                </li>
                                <li class="file_item">
                                    <a class="contacts file_link">
                                        <img class="file_img" id="contact" src="../img/topsecret.svg" alt="file">
                                        <p>Contact</p>
                                    </a>
                                </li>
                            </ul>
                    </ul>
                </div>
            
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script src="../js/top.js"></script>
    <script src="../js/common.js"></script>
</body>
</html>