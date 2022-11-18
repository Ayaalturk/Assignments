$(function () {
    $('.card-wrapper').click(function () {
        $(this).children().first().children('form').trigger('submit');
    });
});