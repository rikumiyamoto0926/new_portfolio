$(window).on('load',function(){
	
	// ここから文字を<span></span>で囲む記述
	
	$('.typ').children().andSelf().contents().each(function() {
	
	if (this.nodeType == 3) {
	$(this).replaceWith($(this).text().replace(/(\S)/g, '<span>$1</span>'));
	
	}
	
	});
	
	// ここから一文字ずつフェードインさせる記述
	
	$('.typ').css({'opacity':1});
	1
	for (var i = 0; i <= $('.typ').children().size(); i++) {

		// スピードとカタカタ具合
	
	$('.typ').children('span:eq('+i+')').delay(15*i).animate({'opacity':1},30);
	
	};

	});
	

