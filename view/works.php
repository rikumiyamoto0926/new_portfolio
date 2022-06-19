<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- slickのCDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <link rel="stylesheet" href="/new_portfolio/css/destryle.css">
    <link rel="stylesheet" href="/new_portfolio/css/common.css">
    <link rel="stylesheet" href="../css/works.css">
    <title>Document</title>
</head>
<body>
    <div class="background">
        <div class="header">
            <h3>Works</h3>
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

            <ul class="slide-items">
                <li><img src="../img/works/page1.png" alt="模写ポートフォリオ">
                    <a href="https://www.bariuma.biz/" class="mask">
                        <div class="caption">模写ポートフォリオ</div>
                    </a>
                </li>
                <li><img src="../img/works/page2.png" alt="Twitterクローン">
                    <a href="https://www.bariuma.biz/" class="mask">
                        <div class="caption">Twitterクローン</div>
                    </a>
                </li>
                <li><img src="../img/works/page3.png" alt="イベント管理システム">
                    <a href="https://www.bariuma.biz/" class="mask">
                        <div class="caption">イベント管理システム</div>
                    </a>
                </li>
                <li><img src="../img/works/page4.png" alt="自作ポートフォリオ">
                    <a href="https://www.bariuma.biz/" class="mask">
                        <div class="caption">自作ポートフォリオ</div>
                    </a>
                </li>
            </ul>

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
    <script src="../js/works.js"></script>
    <script src="../js/common.js"></script>


</body>
</html>