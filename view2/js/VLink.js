
    $('.scenarios ul li').hover(function() {
        $(this).children().stop().animate({'top':0},300 );
    }, function() {
        $(this).children().stop().animate({'top':250},300 );
    });
    // ------------------
    $('.VLinkTerminal ul #move01').hover(function() {
        $(this).children('span').addClass('rightblack')
        $('#move02').css({'background':'#333'});
        $('#move02 p').css('color', '#fff');
    }, function() {
         $(this).children('span').removeClass('rightblack')
         $('#move02').css({'background':'#fff'});
         $('#move02 p').css('color', '#979797');
    });

        $('.VLinkTerminal ul #move03').hover(function() {
        $(this).children('span').addClass('rightblack')
        $('#move04').css({'background':'#333'});
        $('#move04 p').css('color', '#fff');
    }, function() {
         $(this).children('span').removeClass('rightblack')
         $('#move04').css({'background':'#fff'});
         $('#move04 p').css('color', '#979797');
    });

        $('.VLinkTerminal ul #move05').hover(function() {
        $(this).children('span').addClass('leftblack')
        $('#move06').css({'background':'#333'});
        $('#move06 p').css('color', '#fff');
    }, function() {
         $(this).children('span').removeClass('leftblack')
         $('#move06').css({'background':'#fff'});
         $('#move06 p').css('color', '#979797');
    });

        $('.VLinkTerminal ul #move07').hover(function() {
        $(this).children('span').addClass('leftblack')
        $('#move08').css({'background':'#333'});
        $('#move08 p').css('color', '#fff');
    }, function() {
         $(this).children('span').removeClass('leftblack')
         $('#move08').css({'background':'#fff'});
         $('#move08 p').css('color', '#979797');
    });













