// タイピングアニメーション
// TextTypingというクラス名がついている子要素（span）を表示から非表示にする定義
function TextTypingAnime() {
    $('.TextTyping').each(function () {
      var elemPos = $(this).offset().top - 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      var thisChild = "";
      if (scroll >= elemPos - windowHeight) {
        thisChild = $(this).children(); //spanタグを取得
        //spanタグの要素の１つ１つ処理を追加
        thisChild.each(function (i) {
          var time = 100;
          //時差で表示する為にdelayを指定しその時間後にfadeInで表示させる
          $(this).delay(time * i).fadeIn(time);
        });
      } else {
        thisChild = $(this).children();
        thisChild.each(function () {
          $(this).stop(); //delay処理を止める
          $(this).css("display", "none"); //spanタグ非表示
        });
      }
    });
  }
  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    TextTypingAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述
  
  // 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function () {
    //spanタグを追加する
    var element = $(".TextTyping");
    element.each(function () {
      var text = $(this).html();
      var textbox = "";
      text.split('').forEach(function (t) {
        if (t !== " ") {
          textbox += '<span>' + t + '</span>';
        } else {
          textbox += t;
        }
      });
      $(this).html(textbox);
  
    });
  
    TextTypingAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
  

  // 遷移を遅らせる
   // クリック時の画像変更
  $(".topfile").on("click", function() {
    setTimeout(function() {
      location.href= "../view/top.php";
    }, 1500);
    document.getElementById('top').src = '../img/click.png';
  });

  $(".works").on("click", function() {
    setTimeout(function() {
      location.href= "../view/works.php";
    }, 1500);
    document.getElementById('work').src = '../img/click.png';
  });

  $(".abouts").on("click", function() {
    setTimeout(function() {
      location.href= "../view/about.php";
    }, 1500);
    document.getElementById('about').src = '../img/click.png';
  });

  $(".contacts").on("click", function() {
    setTimeout(function() {
      location.href= "../view/contact.php";
    }, 1500);
    document.getElementById('contact').src = '../img/click.png';
  });
