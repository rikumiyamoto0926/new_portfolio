'use strict';

const img = ["../img/smile.svg", "../img/tired.svg", "../img/sleep.svg"];

let count = -1;

picChange();

function picChange() {

    count++;
    // カウントが最大になれば初期値に戻す
    if (count == img.length) count = 0;
    //画像選択
    pic.src = img[count];
    //1秒ごとに実行
    setTimeout("picChange()", 2000);
}

// フッターの日時

  // 英語表記の月
    let day = new Date();

    let month_name = '';

    month_name = new Intl.DateTimeFormat('en', { month: 'long'}).format(day);

    Month.innerHTML += month_name;

  // 日と年数
    window.onload = function () {
    var today = new Date();

    var strToday = today.getDate() + ", ";
    strToday += today.getFullYear();
    document.getElementById("date").innerHTML = strToday;
}

  // 時間
    function set2fig(num) {
    // 桁数が1桁だったら先頭に0を加えて2桁に調整する
    var ret;
    if( num < 10 ) { ret = "0" + num; }
    else { ret = num; }
    return ret;
    }  
    function showClock2() {
    var nowTime = new Date();
    var nowHour = set2fig( nowTime.getHours() );
    var nowMin  = set2fig( nowTime.getMinutes() );
    var nowSec  = set2fig( nowTime.getSeconds() );
    var msg = nowHour + ":" + nowMin + ":" + nowSec;
    document.getElementById("RealtimeClock").innerHTML = msg;
}
    setInterval('showClock2()',1000);