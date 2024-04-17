/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$(window).scroll(function () {
//    if ($(this).scrollTop() > 120) {
//        $('header').addClass('sticky');
//    } else {
//        $('header').removeClass('sticky');
//    }
//});

$(document).ready(function () {
    var count =0;
    $('#counterButton').on('click', function () {
        count = count + 1;
        $('#counterDisply').html(count);
    });
});
