/**
 * 灯泡的js文件
 */

$(function(){
    $('.navbar').mouseenter(function(){
        $('#www-filament').css({
            'fill':'#ffdf43',
            'stroke': '#ffdf43',
             'stroke-width': '3',
           'transition': 'all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55)'
        });
        $('#s-bulb').css({
            'fill': '#c4d8d9',
            'stroke': '#c4d8d9',
            'stroke-width': '2',
            'transition': '100ms'
        });
    });
    $('.bubble-wrapper').click(function(){
        $('#www-filament').css({
            'fill':'#000',
            'stroke': '#000',
             'stroke-width': '3',
             'transition': '100ms'
        });
        $('#s-bulb').css({
            'fill': '#000',
            'stroke': '#000',
            'stroke-width': '2',
            'transition': '100ms'
        });
    });
});