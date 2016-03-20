$(window).scroll(function () {

    var wScroll = $(this).scrollTop();

    $('.mainlogo').css({
        'transform': 'translate(0px, ' + wScroll / 2 + '%)'
    });

});
