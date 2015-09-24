$(document).ready(function(){
    $('.moreagency, .moreforwarding, .moreother').nextAll().hide();
    $('.moreagency').click(function(){
        $(this).nextAll().show();
        $(this).hide();
    });
    $('.moreforwarding').click(function(){
        $(this).nextAll().show();
        $(this).hide();
    });
    $('.moreother').click(function(){
        $(this).nextAll().show();
        $(this).hide();
    });
});